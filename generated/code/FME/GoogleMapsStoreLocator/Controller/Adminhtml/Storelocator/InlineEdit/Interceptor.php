<?php
namespace FME\GoogleMapsStoreLocator\Controller\Adminhtml\Storelocator\InlineEdit;

/**
 * Interceptor class for @see \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Storelocator\InlineEdit
 */
class Interceptor extends \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Storelocator\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Storelocator\PostDataProcessor $dataProcessor, \FME\GoogleMapsStoreLocator\Model\Storelocator $StorelocatorModel, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->___init();
        parent::__construct($context, $dataProcessor, $StorelocatorModel, $jsonFactory);
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
