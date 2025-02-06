<?php

namespace Magebit\Faq\Api\Data;

use Magebit\Faq\Model\FaqFactory;

class FaqInterfaceFactory
{
    public function __construct(protected FaqFactory $faqFactory){}

    public function create(): \Magebit\Faq\Model\Faq
    {
        return $this->faqFactory->create();
    }
}
