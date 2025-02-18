<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2022-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Hyva\Checkout\Model\Form\EntityFormModifier;

use Hyva\Checkout\Magewire\Checkout\AddressView\AbstractMagewireAddressForm;
use Hyva\Checkout\Model\AvailableRegions;
use Hyva\Checkout\Model\Form\EntityField\AbstractEntityField;
use Hyva\Checkout\Model\Form\EntityFieldInterface;
use Hyva\Checkout\Model\Form\EntityFormInterface;
use Hyva\Checkout\Model\Form\EntityFormModifierInterface;
use Magento\Directory\Api\CountryInformationAcquirerInterface;
use Magento\Directory\Helper\Data as DirectoryDataHelper;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Quote\Api\Data\AddressInterface;
use Psr\Log\LoggerInterface;

class WithRegionModifier implements EntityFormModifierInterface
{
    protected CountryInformationAcquirerInterface $countryInformationAcquirer;
    protected LoggerInterface $logger;
    protected DirectoryDataHelper $directoryDataHelper;
    protected AvailableRegions $availableRegions;

    public function __construct(
        CountryInformationAcquirerInterface $countryInformationAcquirer,
        DirectoryDataHelper $directoryDataHelper,
        LoggerInterface $logger,
        AvailableRegions $availableRegions = null
    ) {
        $this->countryInformationAcquirer = $countryInformationAcquirer;
        $this->directoryDataHelper = $directoryDataHelper;
        $this->logger = $logger;

        $this->availableRegions = $availableRegions
            ?: ObjectManager::getInstance()->get(AvailableRegions::class);
    }

    public function apply(EntityFormInterface $form): EntityFormInterface
    {
        $form->registerModificationListener(
            'applyRegionOptionsByCountryValue',
            'form:build',
            [$this, 'applyRegionOptionsByCountryValue']
        );

        $form->registerModificationListener(
            'resetSelectRegionOnCountryUpdate',
            'form:country_id:updated',
            fn (EntityFormInterface $form, EntityFieldInterface $field, AbstractMagewireAddressForm $component)
                => $this->resetSelectRegionOnCountryUpdate($form, $field)
        );

        $form->registerModificationListener(
            'applyRegionIndexAsValueOnSelect',
            'form:fill',
            fn (EntityFormInterface $form, array $values)
                => $this->applyRegionIndexAsValueOnSelect($form, $values)
        );

        return $form;
    }

    public function applyRegionOptionsByCountryValue(EntityFormInterface $form): EntityFormInterface
    {
        $countryField = $form->getField(AddressInterface::KEY_COUNTRY_ID);
        $regionField = $form->getField(AddressInterface::KEY_REGION);

        if (! $regionField || ! $countryField || $countryField->getValue() === null) {
            return $form;
        }

        $regionField->setData(EntityFieldInterface::IS_REQUIRED, $this->directoryDataHelper->isRegionRequired($countryField->getValue()));

        if (! $this->directoryDataHelper->isShowNonRequiredState() && ! $regionField->isRequired()) {
            $regionField->hide();
            return $form;
        }

        try {
            $availableRegionOptions = $this->availableRegions->getAvailableRegions((string) $countryField->getValue());

            if ($availableRegionOptions === null || count($availableRegionOptions) === 0) {
                $regionField->clearOptions();
                return $form;
            }

            $regionField->setOptions(
                array_merge(
                    [
                        [
                            'value' => null,
                            'label' => 'Please select a region, state or province.'
                        ]
                    ],
                    array_map(fn ($region) => [
                        'value' => $region->getId(),
                        'label' => $region->getName()
                    ], $availableRegionOptions)
                )
            );

            $regionField->setData(AbstractEntityField::IS_AUTO_SAVE, false);
        } catch (NoSuchEntityException $exception) {
            $this->logger->critical('Country info for region select options specification is not available.', ['exception' => $exception]);
        }

        return $form;
    }

    public function resetSelectRegionOnCountryUpdate(
        EntityFormInterface $form,
        EntityFieldInterface $field
    ): EntityFormInterface {
        $regionField = $form->getField(AddressInterface::KEY_REGION);

        if ($regionField && $field->getFrontendInput() === 'select') {
            $regionField->reset();
        }

        return $form;
    }

    public function applyRegionIndexAsValueOnSelect(EntityFormInterface $form, array $values): EntityFormInterface
    {
        $regionField = $form->getField(AddressInterface::KEY_REGION);
        $countryField = $form->getField(AddressInterface::KEY_COUNTRY_ID);

        if (! $regionField || ! $countryField || $countryField->getValue() === null) {
            return $form;
        }

        try {
            $regionOptions = $this->availableRegions->getAvailableRegions((string) $countryField->getValue());

            if (! empty($regionOptions) && isset($values['region_id'])) {
                $regionField->setValue($values['region_id']);
            }
        } catch (NoSuchEntityException $exception) {
            $this->logger->critical(
                'Country info for region select options specification is not available.',
                ['exception' => $exception]
            );
        }

        return $form;
    }
}
