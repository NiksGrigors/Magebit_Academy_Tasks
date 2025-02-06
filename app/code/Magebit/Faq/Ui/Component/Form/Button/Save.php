<?php
namespace Magebit\Faq\Ui\Component\Form\Button;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;
use Magento\Ui\Component\Control\Container;

class Save implements ButtonProviderInterface
{
    public function __construct(private Context $context) {}

    /**
     * @return array
     */
    public function getButtonData(): array
    {
        return [
            'id_hard' => 'save',
            'label' => __('Save'),
            'class' => 'save primary',
            'class_name' => Container::SPLIT_BUTTON,
            'options' => $this->getOptions(),
            'sort_order' => 90,
            'dropdown_button_aria_label' => __('Save options'),
        ];
    }

    /**
     * @return array[]
     */
    private function getOptions(): array
    {
        return [
            [
                'id_hard' => 'save_and_close',
                'label' => __('Save & Close'),
                'data_attribute' => [
                    'mage-init' => [
                        'buttonAdapter' => [
                            'actions' => [
                                [
                                    'targetName' => 'faq_question_form.faq_question_form_data_source',
                                    'actionName' => 'save',
                                ]
                            ]
                        ]
                    ]
                ],
            ]
        ];
    }
}
