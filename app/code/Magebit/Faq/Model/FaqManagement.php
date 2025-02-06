<?php
namespace Magebit\Faq\Model;

use Magebit\Faq\Api\FaqRepositoryInterface;

class FaqManagement
{
    protected $faqRepository;

    public function __construct(FaqRepositoryInterface $faqRepository)
    {
        $this->faqRepository = $faqRepository;
    }

    public function enableQuestion($id)
    {
        $faq = $this->faqRepository->getById($id);
        $faq->setStatus(1);
        $this->faqRepository->save($faq);
    }

    public function disableQuestion($id)
    {
        $faq = $this->faqRepository->getById($id);
        $faq->setStatus(0);
        $this->faqRepository->save($faq);
    }
}
