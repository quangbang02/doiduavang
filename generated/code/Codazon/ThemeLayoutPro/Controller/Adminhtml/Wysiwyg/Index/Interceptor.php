<?php
namespace Codazon\ThemeLayoutPro\Controller\Adminhtml\Wysiwyg\Index;

/**
 * Interceptor class for @see \Codazon\ThemeLayoutPro\Controller\Adminhtml\Wysiwyg\Index
 */
class Interceptor extends \Codazon\ThemeLayoutPro\Controller\Adminhtml\Wysiwyg\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $resultRawFactory, $layoutFactory, $data);
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
