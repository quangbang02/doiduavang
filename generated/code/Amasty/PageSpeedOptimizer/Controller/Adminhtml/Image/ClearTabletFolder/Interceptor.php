<?php
namespace Amasty\PageSpeedOptimizer\Controller\Adminhtml\Image\ClearTabletFolder;

/**
 * Interceptor class for @see \Amasty\PageSpeedOptimizer\Controller\Adminhtml\Image\ClearTabletFolder
 */
class Interceptor extends \Amasty\PageSpeedOptimizer\Controller\Adminhtml\Image\ClearTabletFolder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem $filesystem, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($filesystem, $context);
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
