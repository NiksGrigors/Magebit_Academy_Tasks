<?php

declare(strict_types=1);

namespace Magebit\Faq\Api\Data;

use Magebit\Faq\Model\Faq;
use Magebit\Faq\Model\FaqFactory;

class FaqInterfaceFactory
{
    public function __construct(protected FaqFactory $faqFactory){}

    /**
     * @return Faq
     */
    public function create(): Faq
    {
        return $this->faqFactory->create();
    }
}
