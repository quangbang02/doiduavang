<?php
namespace Magefan\Community\Block\Adminhtml\System\Config\Form\ProductKeyField;

/**
 * Interceptor class for @see \Magefan\Community\Block\Adminhtml\System\Config\Form\ProductKeyField
 */
class Interceptor extends \Magefan\Community\Block\Adminhtml\System\Config\Form\ProductKeyField implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        if (!$pluginInfo) {
            return parent::render($element);
        } else {
            return $this->___callPlugins('render', func_get_args(), $pluginInfo);
        }
    }
}
