<?php
namespace Magebit\Faq\Model;

use Magebit\Faq\Api\FaqManagementInterface;
use Magebit\Faq\Api\FaqRepositoryInterface;

class FaqManagement implements FaqManagementInterface
{
    public function __construct(protected FaqRepositoryInterface $faqRepository) {}

    /**
     * @param int $id
     * @return void
     */
    public function enableQuestion(int $id): void
    {
        $faq = $this->faqRepository->getById($id);
        $faq->setStatus(1);
        $this->faqRepository->save($faq);
    }

    /**
     * @param int $id
     * @return void
     */
    public function disableQuestion(int $id): void
    {
        $faq = $this->faqRepository->getById($id);
        $faq->setStatus(0);
        $this->faqRepository->save($faq);
    }
}
