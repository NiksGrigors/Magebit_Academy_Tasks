<?php

namespace Magebit\Faq\Ui\Component\Form\Button;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
use Magento\Backend\Block\Widget\Context;

class Back implements ButtonProviderInterface
{
    /**
     * Constructor
     *
     * @param Context $context
     */
    public function __construct(private Context $context) {}

    /**
     * @return array
     */
    public function getButtonData(): array
    {
        return [
            'label' => __('Back'),
            'on_click' => sprintf("location.href = '%s';", $this->context->getUrlBuilder()->getUrl('*/index/index')),
            'class' => 'back',
            'sort_order' => 10
        ];
    }
}
