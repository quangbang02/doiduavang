<?php
namespace Codazon\Lookbookpro\Controller\Adminhtml\LookbookCategory\NewAction;

/**
 * Interceptor class for @see \Codazon\Lookbookpro\Controller\Adminhtml\LookbookCategory\NewAction
 */
class Interceptor extends \Codazon\Lookbookpro\Controller\Adminhtml\LookbookCategory\NewAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $registry);
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