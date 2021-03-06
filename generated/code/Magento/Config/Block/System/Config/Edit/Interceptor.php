<?php
namespace Magento\Config\Block\System\Config\Edit;

/**
 * Interceptor class for @see \Magento\Config\Block\System\Config\Edit
 */
class Interceptor extends \Magento\Config\Block\System\Config\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Config\Model\Config\Structure $configStructure, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $jsonSerializer = null)
    {
        $this->___init();
        parent::__construct($context, $configStructure, $data, $jsonSerializer);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        if (!$pluginInfo) {
            return parent::toHtml();
        } else {
            return $this->___callPlugins('toHtml', func_get_args(), $pluginInfo);
        }
    }
}
