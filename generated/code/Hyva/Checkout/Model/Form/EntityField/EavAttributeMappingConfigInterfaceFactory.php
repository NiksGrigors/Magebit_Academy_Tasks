<?php
namespace Hyva\Checkout\Model\Form\EntityField;

/**
 * Factory class for @see \Hyva\Checkout\Model\Form\EntityField\EavAttributeMappingConfigInterface
 */
class EavAttributeMappingConfigInterfaceFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Hyva\\Checkout\\Model\\Form\\EntityField\\EavAttributeMappingConfigInterface')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Hyva\Checkout\Model\Form\EntityField\EavAttributeMappingConfigInterface
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
