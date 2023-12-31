<?php

/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Ccavenuepay\Helper\Backend;

use Magento\Ccavenuepay\Helper\Data as FrontendDataHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Sales\Model\OrderFactory;
use Magento\Backend\Model\UrlInterface;

/**
 * Authorize.net Backend Data Helper
 */
class Data extends FrontendDataHelper {

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Sales\Model\OrderFactory $orderFactory
     * @param \Magento\Backend\Model\UrlInterface $backendUrl
     */
    public function __construct(
        Context $context,
        \Magento\Framework\View\LayoutFactory $storeManager,
        \Magento\Payment\Model\Method\Factory $orderFactory,
        \Magento\Store\Model\App\Emulation $appEmulation, 
        \Magento\Payment\Model\Config $paymentConfig,
        \Magento\Framework\App\Config\Initial $initialConfig,
        \Magento\Framework\Session\SessionManagerInterface $coreSession,
        UrlInterface $backendUrl
    ) {
        parent::__construct($context, $storeManager, $orderFactory, $appEmulation, $paymentConfig, $initialConfig, $coreSession);
        $this->_urlBuilder = $backendUrl;
    }

    /**
     * Return URL for admin area
     *
     * @param string $route
     * @param array $params
     * @return string
     */
    protected function _getUrl($route, $params = []) {
        return $this->_urlBuilder->getUrl($route, $params);
    }

    /**
     * Retrieve place order url in admin
     *
     * @return  string
     */
    public function getPlaceOrderAdminUrl() {
        return $this->_getUrl('adminhtml/ccavenuepay/place', []);
    }

    /**
     * Retrieve place order url
     *
     * @param array $params
     * @return  string
     */
    public function getSuccessOrderUrl($params) {
        $param = [];
        $route = 'sales/order/view';
        $order = $this->orderFactory->create()->loadByIncrementId($params['x_invoice_num']);
        $param['order_id'] = $order->getId();
        return $this->_getUrl($route, $param);
    }

    /**
     * Retrieve redirect iframe url
     *
     * @param array $params
     * @return string
     */
    public function getRedirectIframeUrl($params) {
        return $this->_getUrl('adminhtml/ccavenuepay/redirect', $params);
    }

    /**
     * Get direct post relay url
     *
     * @param null|int|string $storeId
     * @return string
     * 
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function getRelayUrl($storeId = null) {
        $defaultStore = $this->storeManager->getDefaultStoreView();
        if (!$defaultStore) {
            $allStores = $this->storeManager->getStores();
            if (isset($allStores[0])) {
                $defaultStore = $allStores[0];
            }
        }
        $baseUrl = $defaultStore->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_LINK);
        return $baseUrl . 'ccavenuepay_backendresponse';
    }

}
