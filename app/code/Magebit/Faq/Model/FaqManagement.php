<?php
namespace Magebit\Faq\Model;

use Magebit\Faq\Api\FaqRepositoryInterface;

class FaqManagement implements \Magebit\Faq\Api\FaqManagementInterface
{
    public function __construct(protected FaqRepositoryInterface $faqRepository) {}

    public function enableQuestion($id): void
    {
        $faq = $this->faqRepository->getById($id);
        $faq->setStatus(1);
        $this->faqRepository->save($faq);
    }

    public function disableQuestion($id): void
    {
        $faq = $this->faqRepository->getById($id);
        $faq->setStatus(0);
        $this->faqRepository->save($faq);
    }
}
