<?php

/**
 * Payment Name      : CCAvenue MCPG
 * Description       : Extends Payment with CCAvenue MCPG
 * CCAvenue Version  : MCPG-2.2
 * Author            : CCAvenue
 */

namespace Magento\Ccavenuepay\Block;

use Magento\Framework\Phrase;
use Magento\Payment\Block\ConfigurableInfo;
use Magento\Ccavenuepay\Gateway\Response\FraudHandler;

class Info extends ConfigurableInfo {

    /**
     * Returns label
     *
     * @param string $field
     * @return Phrase
     */
    protected function getLabel($field) {
        return __($field);
    }

    /**
     * Returns value view
     *
     * @param string $field
     * @param string $value
     * @return string | Phrase
     */
    protected function getValueView($field, $value) {
        switch ($field) {
            case FraudHandler::FRAUD_MSG_LIST:
                return implode('; ', $value);
        }
        return parent::getValueView($field, $value);
    }


    public function getInfo()
    {
        $info = $this->getData('info');
        if (!$info instanceof \Magento\Payment\Model\InfoInterface) {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('We cannot retrieve the payment info model object.')
            );
        }
        return $info;
    }

    public function getMethod()
    {
        return $this->getInfo()->getMethodInstance();
    }

    protected function _prepareSpecificInformation($transport = null) {
        if (null === $this->_paymentSpecificInformation) {
            if (null === $transport) {
                $transport = new \Magento\Framework\DataObject();
            } elseif (is_array($transport)) {
                $transport = new \Magento\Framework\DataObject($transport);
            }
        }
        $data = [];

        if ($this->getInfo()->getAdditionalInformation('payment_type') == 'CRDC' && $this->getInfo()->getData('cc_last_4') && $this->getInfo()->getData('cc_type')) {
            $data[(string) __(sprintf('%s ending in %s', $this->getCcCardName($this->getInfo()->getData('cc_type')),$this->getInfo()->getData('cc_last_4')))] = '';
        }

        if ($this->getInfo()->getAdditionalInformation('payment_type') == 'DBCRD' && $this->getInfo()->getAdditionalInformation('debit_type')) {
            if($this->getInfo()->getData('cc_last_4')){
                $data[(string) __(sprintf('%s ending in %s', $this->getInfo()->getAdditionalInformation('debit_type'),$this->getInfo()->getData('cc_last_4')))] = '';
            }else{
                $data['Debit Card'] = '( ' . $this->getInfo()->getAdditionalInformation('debit_type') . ' )';
            }
        }

        if ($this->getInfo()->getAdditionalInformation('payment_type') == 'NBK' && $this->getInfo()->getAdditionalInformation('net_bank')) {
            $data['Net Banking'] = '( ' . $this->getInfo()->getAdditionalInformation('net_bank') . ' )';
        }
        
        return $transport->setData(array_merge($data, $transport->getData()));
    }

    public function getCcCardName($card_code='')
    {
        $arrCards = array(
                        'VI' => 'Visa',
                        'MC' => 'MasterCard',
                        'AE' => 'Amex',
                        'DI' => 'Discover',
                        'JCB' => 'JCB',
                        'DN' => 'Diners',
                        'MI' => 'Maestro',
                        'MD' => 'Maestro',
                        'RP' => 'RuPay'
                    );

        return (isset($arrCards[$card_code])) ? $arrCards[$card_code] : '';
    }
}
