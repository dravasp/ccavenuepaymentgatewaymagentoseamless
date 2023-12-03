<?php

namespace Magento\Ccavenuepay\Observer;

use Magento\Framework\DataObject;
use Magento\Framework\Encryption\EncryptorInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Exception\LocalizedException;
use Magento\Payment\Observer\AbstractDataAssignObserver;
use Magento\Quote\Api\Data\PaymentInterface;
use Magento\Payment\Model\InfoInterface;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\Ccavenuepay\Helper\Data as CcavenueHelper;

class DataAssignObserver extends AbstractDataAssignObserver {

    protected $_CcavenueHelper;
    protected $_checkoutSession;
    protected $logger;

    public function __construct( CcavenueHelper $CcavenueHelper, CheckoutSession $checkoutSession ) {
        $this->_CcavenueHelper = $CcavenueHelper;
        $this->_checkoutSession = $checkoutSession;

        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $this->logger = new \Zend\Log\Logger();
        $this->logger->addWriter($writer);
        $this->logger->info("__construct Observer DataAssignObserver");
    }

    /**
     * @param Observer $observer
     * @throws LocalizedException
     */
    public function execute(Observer $observer)
    {
        $data = $this->readDataArgument($observer);

        $additionalData = $data->getData(PaymentInterface::KEY_ADDITIONAL_DATA);
        if (!is_array($additionalData)) {
            return;
        }

        $additionalData = new DataObject($additionalData);
        $paymentMethod = $this->readMethodArgument($observer);

        $payment = $observer->getPaymentModel();
        if (!$payment instanceof InfoInterface) {
            $payment = $paymentMethod->getInfoInstance();
        }

        if (!$payment instanceof InfoInterface) {
            throw new LocalizedException(__('Payment model does not provided.'));
        }

        if (!$additionalData->hasData('payment_type')) {
            throw new LocalizedException(__('Please enter payment details.'));
        }

        if(($additionalData->getData('saved_ccard') != '' && $additionalData->getData('saved_ccard') != 'new_card') || ($additionalData->getData('saved_dcard') != '' && $additionalData->getData('saved_dcard') != 'new_card')){

            $saved_card = ( $additionalData->getData('saved_ccard')!='' ? $additionalData->getData('saved_ccard') : $additionalData->getData('saved_dcard') );

            $arrSavedCard = explode("--", $saved_card);

            $payId = $arrSavedCard[0];
            $cardName = $arrSavedCard[1];
            $card4Digits = $arrSavedCard[2];
            
            if($additionalData->getData('payment_type') == 'CRDC'){
                $cardTypeCode = $this->_CcavenueHelper->getCcCardCode($cardName);
                $payment->setCcType($cardTypeCode);
            }else if($additionalData->getData('payment_type') == 'DBCRD'){
                $additionalData->setData('debit_type', $cardName);
            }

            $payment->setCcLast4($card4Digits);
            $this->_CcavenueHelper->setSessionData('ccLast4',$card4Digits);
            $this->_CcavenueHelper->setSessionData('payId',$payId);
            $this->_CcavenueHelper->setSessionData('cardCvv',$payment->encrypt($additionalData->getData('cc_cid')));
        }else{
            $payment->setCcNumberEnc($payment->encrypt($additionalData->getData('cc_number')));
            $payment->setCcLast4(substr($additionalData->getData('cc_number'), -4));
            $payment->setCcType($additionalData->getData('cc_type'));
            $payment->setCcExpMonth($additionalData->getData('cc_exp_month'));
            $payment->setCcExpYear($additionalData->getData('cc_exp_year'));
            $this->_CcavenueHelper->setSessionData('cardCvv',$payment->encrypt($additionalData->getData('cc_cid')));
            $payment->setCcOwner($additionalData->getData('cc_owner'));
        }

        $additionalInfo = $additionalData->getData();

        unset($additionalInfo['saved_ccard']);
        unset($additionalInfo['saved_dcard']);
        unset($additionalInfo['cc_cid']);

        foreach ($additionalInfo as $kInfo => $vInfo) {
            if($kInfo == 'cc_number'){
                $payment->setAdditionalInformation($kInfo, $payment->encrypt($vInfo));
            }else{
                $payment->setAdditionalInformation($kInfo, $vInfo);
            }
        }

    }

}
