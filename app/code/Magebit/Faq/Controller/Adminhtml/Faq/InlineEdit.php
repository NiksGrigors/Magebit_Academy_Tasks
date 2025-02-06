<?php

namespace Magebit\Faq\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultFactory;
use Magebit\Faq\Api\FaqRepositoryInterface;
use Magento\Framework\Exception\LocalizedException;

class InlineEdit extends Action
{
    public function __construct(
        Action\Context $context,
        protected FaqRepositoryInterface $faqRepository
    ) {
        parent::__construct($context);
    }

    /**
     * @return Json
     */
    public function execute(): Json

    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_JSON);

        try {
            $data = $this->getRequest()->getParam('items');
            if (empty($data)) {
                throw new LocalizedException(__('Please select a record.'));
            }

            foreach ($data as $faqId => $faqData) {
                $faq = $this->faqRepository->getById($faqId);

                if ($faq->getId()) {
                    $faq->setData($faqData);
                    $this->faqRepository->save($faq);
                }
            }

            $result->setData([
                'success' => true,
                'message' => __('The FAQ data has been saved.')
            ]);
        } catch (\Exception $e) {
            $result->setData([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }

        return $result;
    }
}
