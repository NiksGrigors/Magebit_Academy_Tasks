<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2022-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Hyva\Checkout\Model\Form\EntityFormModifier;

use Hyva\Checkout\Model\ConfigData\HyvaThemes\AddressForm\SystemConfigStreet;
use Hyva\Checkout\Model\Form\EntityFieldInterface;
use Hyva\Checkout\Model\Form\EntityFormElementInterface;
use Hyva\Checkout\Model\Form\EntityFormInterface;
use Hyva\Checkout\Model\Form\EntityFormModifierInterface;
use Magento\Quote\Api\Data\AddressInterface;

class WithStreetModifier implements EntityFormModifierInterface
{
    protected SystemConfigStreet $systemConfigStreet;

    public function __construct(
        SystemConfigStreet $systemConfigStreet
    ) {
        $this->systemConfigStreet = $systemConfigStreet;
    }

    public function apply(EntityFormInterface $form): EntityFormInterface
    {
        /*
         * Form Field Modification :: Street (+ its relatives)
         *
         * The default street field is automatically labeled based on the corresponding attribute.
         * In the system configuration, we have introduced a new feature that allows users to customize
         * the field labels based on the number of lines required by Magento's core. This configuration
         * enables dynamic visibility of field labels for each individual field.
         *
         * This modifier spreads each label to it's belonging field.
         */
        $form->registerModificationListener(
            'applyStreetLabels',
            'form:build',
            function (EntityFormInterface $form) {
                $streetField = $form->getField(AddressInterface::KEY_STREET);

                if ($streetField === null) {
                    return $form;
                }

                if ($this->systemConfigStreet->hasLabelFor(0)) {
                    $streetField->setData(EntityFormElementInterface::LABEL, $this->systemConfigStreet->getLabelFor(0));
                }

                if ($streetField->hasRelatives()) {
                    foreach (array_values($streetField->getRelatives()) as $key => $field) {
                        $field->setData(EntityFormElementInterface::LABEL, $this->systemConfigStreet->getLabelFor($key + 1) ?? '');
                    }
                }

                return $form;
            }
        );

        /*
         * Form Field Modification :: Street
         *
         * The rendering of a street can be customized based on a specified layout alias.
         * If a layout alias is provided, the renderer will prioritize using the frontend
         * input alias associated with it. However, if the frontend input alias is not set,
         * it will fall back to the original frontend input.
         *
         * In this case, the default alias for street is 'text'. Therefore, during the
         * rendering process, it will first search for 'street' in any form and then fallback
         * to 'text' if no matching alias is found.
         */
        $form->registerModificationListener(
            'applyStreetRenderAlias',
            'form:build',
            function (EntityFormInterface $form) {
                $field = $form->getField('street');
                $field->setData(EntityFieldInterface::INPUT_ALIAS, 'street');

                return $form;
            }
        );

        return $form;
    }
}
