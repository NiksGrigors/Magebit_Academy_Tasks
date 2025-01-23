<?php

namespace Magebit\PageListWidget\Block\Widget;

use Magento\Cms\Model\ResourceModel\Page\CollectionFactory;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class PageList extends Template implements BlockInterface
{
    protected $pageCollectionFactory;
    protected $_template = 'widget/pagelist.phtml';
    private const DISPLAY_MODE_ALL = 'all';
    private const DISPLAY_MODE_SPECIFIC = 'specific';


    /**
     * PageList constructor.
     * @param Template\Context $context
     * @param CollectionFactory $pageCollectionFactory
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        CollectionFactory $pageCollectionFactory,
        array $data = []
    ) {
        $this->pageCollectionFactory = $pageCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * Get widget title
     * @return string|null
     */
    public function getTitle()
    {
        return $this->getData('title');
    }

    /**
     * Get CMS pages based on display mode
     * @return array
     */
    public function getCmsPages()
    {
        $displayMode = $this->getData('display_mode');
        $pageCollection = $this->pageCollectionFactory->create();
        $pageCollection->addFieldToFilter('is_active', 1);
        $pageCollection->addStoreFilter($this->_storeManager->getStore()->getId());

        if ($displayMode === self::DISPLAY_MODE_SPECIFIC) {
            $selectedPages = $this->getData('selected_pages');
            if (!empty($selectedPages)) {
                $pageIdentifiers = explode(',', $selectedPages);
                $pageCollection->addFieldToFilter('identifier', ['in' => $pageIdentifiers]);

                // Debugging: Log selected page identifiers
                $this->_logger->debug('Selected Page Identifiers: ' . implode(',', $pageIdentifiers));
            } else {
                return []; // No specific pages selected
            }
        }

        return $pageCollection->getItems();
    }
}
