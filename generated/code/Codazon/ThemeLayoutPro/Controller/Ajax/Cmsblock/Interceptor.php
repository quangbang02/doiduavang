<?php
namespace Codazon\ThemeLayoutPro\Controller\Ajax\Cmsblock;

/**
 * Interceptor class for @see \Codazon\ThemeLayoutPro\Controller\Ajax\Cmsblock
 */
class Interceptor extends \Codazon\ThemeLayoutPro\Controller\Ajax\Cmsblock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Cms\Model\Block $block, \Codazon\ThemeLayoutPro\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $block, $helper);
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
