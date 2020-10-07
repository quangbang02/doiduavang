<?php
namespace Codazon\ThemeLayoutPro\Controller\Adminhtml\Ajax\Templates;

/**
 * Interceptor class for @see \Codazon\ThemeLayoutPro\Controller\Adminhtml\Ajax\Templates
 */
class Interceptor extends \Codazon\ThemeLayoutPro\Controller\Adminhtml\Ajax\Templates implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Codazon\ThemeLayoutPro\Model\TemplateFactory $templateFactory, \Codazon\ThemeLayoutPro\Model\TemplateSetFactory $templateSetFactory, \Codazon\ThemeLayoutPro\Helper\Data $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $templateFactory, $templateSetFactory, $helper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
