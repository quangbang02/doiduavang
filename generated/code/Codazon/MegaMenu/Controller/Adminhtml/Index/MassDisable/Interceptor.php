<?php
namespace Codazon\MegaMenu\Controller\Adminhtml\Index\MassDisable;

/**
 * Interceptor class for @see \Codazon\MegaMenu\Controller\Adminhtml\Index\MassDisable
 */
class Interceptor extends \Codazon\MegaMenu\Controller\Adminhtml\Index\MassDisable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($context);
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
