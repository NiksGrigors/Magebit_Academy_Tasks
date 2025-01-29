<?php

namespace Magebit\GridRender\Plugin;

use Psr\Log\LoggerInterface;

class SaveActionPlugin
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    public function beforeExecute(
        \Magebit\GridRender\Controller\Adminhtml\Item\Save $subject
    ): void
    {
        $this->logger->debug('Before execute');
    }

    public function afterExecute(
        \Magebit\GridRender\Controller\Adminhtml\Item\Save $subject,
        $result
    ) {
        $this->logger->debug('After execute');
        return $result;
    }

    public function aroundExecute(
        \Magebit\GridRender\Controller\Adminhtml\Item\Save $subject,
        \Closure $proceed
    ) {
        $this->logger->debug('Around execute - before proceed');
        $result = $proceed();
        $this->logger->debug('Around execute - after proceed');
        return $result;
    }
}

