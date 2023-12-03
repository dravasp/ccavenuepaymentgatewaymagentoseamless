<?php

namespace Magento\Ccavenuepay\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer as EventObserver;
use Magento\Ccavenuepay\Helper\Data as CcavenuepaydataHelper;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Ccavenuepay\Model\IframeConfigProvider;
use Magento\Ccavenuepay\Helper\Data as CcavenueHelper;

class RestrictAdminUsageObserver implements ObserverInterface {

    /**
     * @var \Magento\Framework\AuthorizationInterface
     */
    protected $_authorization;

    /**
     * @var \Magento\Ccavenuepay\Helper\Data
     */
    protected $_ccavenuepayhelperdata;

    /**
     * @param \Magento\Framework\AuthorizationInterface $authorization
     */
    public function __construct(
    \Magento\Framework\AuthorizationInterface $authorization, \Magento\Ccavenuepay\Helper\Data $data, IframeConfigProvider $IframeConfigProvider,WriterInterface $configWriter, CcavenueHelper $CcavenueHelper, TypeListInterface $cacheTypeList
    ) {
        $this->_configProvider = $IframeConfigProvider;
        $this->_configWriter = $configWriter;
        $this->_CcavenueHelper = $CcavenueHelper;
        $this->_cacheTypeList = $cacheTypeList;

        /**** Checking allowed card types for merchant - Start ****/
        $response = $this->_configProvider->callMerchantApi();

        if(!isset($response['payOptions'])){
            $this->_configWriter->save('payment/ccavenuepay/active', 0);
            throw new \Magento\Framework\Exception\LocalizedException(
                __('Something went wrong in the payment gateway. Please check ccavenue configuration.')
            );
        }

        foreach($response['payOptions'] as $kRes => $vRes){
            if($vRes['payOpt'] == 'OPTCRDC'){
                foreach ($vRes['cardsList'] as $key => $value) {
                    $arrCards[] = $this->_CcavenueHelper->getCcCardCode($value['cardName']);
                }
            }
        }
        $arrCards = array_filter($arrCards);
        $activeCards = implode(",", $arrCards);
        $this->_configWriter->save('payment/ccavenuepay/cctypes', $activeCards);
        $this->_cacheTypeList->cleanType('config');
        /**** Checking allowed card types for merchant - End ****/

        $this->_authorization = $authorization;
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $this->logger = new \Zend\Log\Logger();
        $this->logger->addWriter($writer);
        $this->logger->info("EventObserver==__construct11===");
        $this->_authorization = $data;
        $this->logger->info("data==data===");
    }

    /**
     * Block admin ability to use customer billing agreements
     *
     * @param EventObserver $observer
     * @return void
     */
    public function execute(EventObserver $observer) {
        $event = $observer->getEvent();
        $methodInstance = $event->getMethodInstance();
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $this->logger = new \Zend\Log\Logger();
        $this->logger->addWriter($writer);
        $object_manager = \Magento\Framework\App\ObjectManager::getInstance();
        $this->logger->info("EventObserver==__construct11333===");
    }

}
