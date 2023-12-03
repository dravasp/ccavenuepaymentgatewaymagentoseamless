<?php

/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Ccavenuepay\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\Locale\ResolverInterface;
use Magento\Framework\UrlInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Ccavenuepay\Model\Ccavenuepay;
use Magento\Payment\Helper\Data as PaymentHelper;
use Magento\Ccavenuepay\Helper\Data as CcavenueHelper;

class IframeConfigProvider implements ConfigProviderInterface {

    /**
     * @var string[]
     */
    protected $methodCodes = [
        Config::METHOD_CODE
    ];

    /**
     * @var \Magento\Payment\Model\Method\AbstractMethod[]
     */
    protected $methods = [];

    /**
     * @var PaymentHelper
     */
    protected $paymentHelper;

    /**
     * @var UrlInterface
     */
    protected $urlBuilder;
    protected $logger;
    protected $paymentMethod;
    protected $_scopeConfig;
    protected $_customerSession;

    /**
     * @param PaymentHelper $paymentHelper
     * @param UrlInterface $urlBuilder
     */
    public function __construct(
    PaymentHelper $paymentHelper, UrlInterface $urlBuilder, ScopeConfigInterface $scopeConfig, Ccavenuepay $Ccavenuepay, CcavenueHelper $CcavenueHelper
    ) {
        $this->paymentHelper = $paymentHelper;
        $this->_scopeConfig = $scopeConfig;
        $this->Ccavenuepay = $Ccavenuepay;
        $this->_CcavenueHelper = $CcavenueHelper;
        $this->urlBuilder = $urlBuilder;
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $this->logger = new \Zend\Log\Logger();
        $this->logger->addWriter($writer);
        $this->logger->info("__construct methodCodes===11111111");

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $this->_customerSession = $objectManager->get('Magento\Customer\Model\Session');

        foreach ($this->methodCodes as $code) {
            $this->methods[$code] = $this->paymentHelper->getMethodInstance($code);
            $this->logger->info("=======Methodcode=======");
            $this->logger->info([$code, 'll']);
            $this->logger->info("merchant_id===" . $this->_scopeConfig->getValue('payment/ccavenuepay/merchant_id'));
            $paymentMethod = $this->methods[$code];
        }
    }

    public function callMerchantApi(){

        if($this->_customerSession->isLoggedIn()){
            $data['customer_identifier'] = $this->_scopeConfig->getValue('payment/ccavenuepay/merchant_id').$this->_customerSession->getCustomer()->getId();
        }

        $data['command'] = "getJsonDataVault";
        $data['access_code'] = $this->_scopeConfig->getValue('payment/ccavenuepay/access_code');
        $data['currency'] = $this->_scopeConfig->getValue('currency/options/base');
        $data['amount'] = "10.00";
        $parameters = http_build_query($data);
        $apiurl = strtok($this->Ccavenuepay->getCcavenueTransactionUrl(),'?');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $apiurl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = str_replace('"[','[', $result);
        $result = str_replace(']"',']', $result);
        $result = str_replace('\\','', $result);
        $result = json_decode($result, true);
        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig() {

        $paymentcode = Config::METHOD_CODE;

        $hasVault = $this->_scopeConfig->getValue('payment/ccavenuepay/ccavenue_vault');

        $isCustomerLogin = 0;
        if($this->_customerSession->isLoggedIn()){
            $isCustomerLogin = 1;
        }

        $config = [
            'payment' => [
                'ccavenuepay' => [],
            ],
        ];

        foreach ($this->methodCodes as $code) {
            if ($this->methods[$code]->isAvailable()) {
                $config['payment']['ccavenuepay']['actionUrl'][$code] = $this->getFrameActionUrl($code);
            }
        }

        $config['payment']['ccavenuepay']['MerchantDetails'] = $this->callMerchantApi();

        $config['payment']['ccavenuepay']['vaultStatus'] = $hasVault;

        $config['payment']['ccavenuepay']['isCustomerLogin'] = $isCustomerLogin;

        return $config;
    }

    /**
     * Get frame action URL
     *
     * @param string $code
     * @return string
     */
    protected function getFrameActionUrl($code) {

        $url = '';
        switch ($code) {
            case Config::METHOD_CODE:
                $url = $this->urlBuilder->getUrl('ccavenuepay/ccavenuepay/redirect', ['_secure' => true]);
                break;
        }

        return $url;
    }

    
    /**
     * Retrieve gateway url
     *
     * @return string
     */
    protected function getCgiUrl() {
        return (bool) $this->getMethodConfigData('sandbox_flag') ? $this->getMethodConfigData('cgi_url_test_mode') : $this->getMethodConfigData('cgi_url');
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info("getCgiUrl=====");
        $logger->info($this->getMethodConfigData('cgi_url'));
        $logger->info("merchant_id-----");
        $logger->info($this->getMethodConfigData('merchant_id'));
        $logger->info("getCgiUrl----");
        return $this->getMethodConfigData('cgi_url');
    }

}
