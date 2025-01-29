<?php

namespace Magebit\GridRender\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class PostSaveAfter implements ObserverInterface
{

    public function __construct(
        private LoggerInterface $logger
    ) {}

    public function execute(Observer $observer): void
    {
        /** @var \Magebit\GridRender\Model\Post $post */
        $post = $observer->getData('post');

        $this->logger->info('Post saved:', ['title' => $post->getTitle()]);
    }
}
