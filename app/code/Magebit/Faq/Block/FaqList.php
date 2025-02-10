<?php

namespace Magebit\Faq\Block;

use Magebit\Faq\Api\FaqRepositoryInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class FaqList extends Template
{
    public function __construct(
        Context $context,
        protected FaqRepositoryInterface $faqRepository,
        protected array $data = []
    ) {
        parent::__construct($context);
    }

    /**
     * @return array
     */
    public function getFaqList(): array
    {
        return $this->faqRepository->getFaqCollection()->getItems();
    }
}
