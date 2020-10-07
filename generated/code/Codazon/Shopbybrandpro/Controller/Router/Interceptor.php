<?php
namespace Codazon\Shopbybrandpro\Controller\Router;

/**
 * Interceptor class for @see \Codazon\Shopbybrandpro\Controller\Router
 */
class Interceptor extends \Codazon\Shopbybrandpro\Controller\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory, \Codazon\Shopbybrandpro\Model\BrandFactory $brandFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($actionFactory, $brandFactory, $storeManager, $scopeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        if (!$pluginInfo) {
            return parent::match($request);
        } else {
            return $this->___callPlugins('match', func_get_args(), $pluginInfo);
        }
    }
}