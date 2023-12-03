/**
 * Payment Name      : CCAvenue MCPG
 * Description       : Extends Payment with CCAvenue MCPG
 * CCAvenue Version  : MCPG-2.2
 * Author            : CCAvenue
 */
/*browser:true*/
/*global define*/
define(
        [
            'jquery',
            'Magento_Payment/js/view/payment/cc-form',
            'Magento_Checkout/js/action/place-order',
            'Magento_Checkout/js/action/select-payment-method',
            'Magento_Customer/js/model/customer',
            'Magento_Checkout/js/checkout-data',
            'Magento_Checkout/js/model/payment/additional-validators',
            'Magento_Ccavenuepay/js/model/credit-card-validation/validator',
            'Magento_Payment/js/model/credit-card-validation/credit-card-data',
            'Magento_Ccavenuepay/js/model/credit-card-validation/credit-card-number-validator',
            'mage/url',
            'mage/validation'
        ],
        function (
                $,
                Component,
                placeOrderAction,
                selectPaymentMethodAction,
                customer,
                checkoutData,
                additionalValidators,
                creditCardValidators,
                creditCardData,
                cardNumberValidator,
                url,
                mageValid
                ) {
            'use strict';

            //global arrays for payment options list
            var paymentOptions = [];
            var creditCards = [];
            var debitCards = [];
            var netBanks = [];
            var cashCards = [];
            var mobilePayments = [];
            var savedCreditCards = [];
            var savedDebitCards = [];

            return Component.extend({
                defaults: {
                    template: 'Magento_Ccavenuepay/payment/form',
                    creditCardType: '',
                    creditCardExpYear: '',
                    creditCardExpMonth: '',
                    creditCardNumber: '',
                    creditCardVerificationNumber: '',
                    selectedCardType: null
                },

                /** @inheritdoc */
                initObservable: function () {
                    this._super()
                        .observe([
                            'creditCardType',
                            'creditCardExpYear',
                            'creditCardExpMonth',
                            'creditCardNumber',
                            'creditCardVerificationNumber',
                            'selectedCardType'
                        ]);

                    return this;
                },

                /**
                 * Init component
                 */
                initialize: function () {

                    var self = this;

                    this._super();

                    this.processData(this.callMerchantApi());

                    //Set credit card number to credit card data object
                    this.creditCardNumber.subscribe(function (value) {
                        var result;

                        self.selectedCardType(null);

                        if (value === '' || value === null) {
                            return false;
                        }
                        result = cardNumberValidator(value);

                        if (!result.isPotentiallyValid && !result.isValid) {
                            return false;
                        }

                        if (result.card !== null) {
                            self.selectedCardType(result.card.type);
                            creditCardData.creditCard = result.card;
                        }

                        if (result.isValid) {
                            creditCardData.creditCardNumber = value;
                            self.creditCardType(result.card.type);
                        }
                    });

                    //Set expiration year to credit card data object
                    this.creditCardExpYear.subscribe(function (value) {
                        creditCardData.expirationYear = value;
                    });

                    //Set expiration month to credit card data object
                    this.creditCardExpMonth.subscribe(function (value) {
                        creditCardData.expirationMonth = value;
                    });

                    //Set cvv code to credit card data object
                    this.creditCardVerificationNumber.subscribe(function (value) {
                        creditCardData.cvvCode = value;
                    });
                },

                getData: function () {
                    return {
                        'method': this.item.method,
                        'additional_data': {
                            'cc_cid': this.creditCardVerificationNumber(),
                            'cc_type': this.creditCardType(),
                            'cc_exp_year': this.creditCardExpYear(),
                            'cc_exp_month': this.creditCardExpMonth(),
                            'cc_number': this.creditCardNumber(),
                            'payment_type': $('input:radio.payment_card_type:checked').val(),
                            'cc_owner': $('#' + this.getCode() + '_cc_owner').val(),
                            'net_bank': $('#' + this.getCode() + '_net_bank').val(),
                            'debit_type': $('#' + this.getCode() + '_debit_type').val(),
                            'save_card': $('#' + this.getCode() + '_save_card:checked').val(),
                            'saved_ccard': $('#' + this.getCode() + '_stored_ccards').val(),
                            'saved_dcard': $('#' + this.getCode() + '_stored_dcards').val(),
                        }
                    };
                },

                /**
                 * Get list of available credit card types values
                 * @returns {Object}
                 */
                getCcAvailableTypesValues: function () {
                    return _.map(this.getCcAvailableTypes(), function (value, key) {
                        return {
                            'value': key,
                            'type': value
                        };
                    });
                },

                getDcAvailableTypesValues: function () {
                    return  [
                                        {
                                            'value': 'VI',
                                            'type': 'Visa'
                                        },
                                        {
                                            'value': 'MC',
                                            'type': 'MasterCard'
                                        },
                                        {
                                            'value': 'AE',
                                            'type': 'American Express'
                                        },
                                        {
                                            'value': 'RP',
                                            'type': 'RuPay'
                                        },
                                        {
                                            'value': 'MI',
                                            'type': 'Maestro International'
                                        },
                                        {
                                            'value': 'MD',
                                            'type': 'Maestro Domestic'
                                        }
                                    ];
                },

                placeOrder: function (data, event) {
                    if (event) {
                        event.preventDefault();
                    }
                    var self = this,
                            placeOrder,
                            emailValidationResult = customer.isLoggedIn(),
                            loginFormSelector = 'form[data-role=email-with-possible-login]';

                    if (!customer.isLoggedIn()) {
                        $(loginFormSelector).validation();
                        emailValidationResult = Boolean($(loginFormSelector + ' input[name=username]').valid());
                    }
                    if (emailValidationResult && this.validate() && additionalValidators.validate()) {
                        this.isPlaceOrderActionAllowed(false);
                        placeOrder = placeOrderAction(this.getData(), false, this.messageContainer);

                        $.when(placeOrder).fail(function () {
                            self.isPlaceOrderActionAllowed(true);
                        }).done(this.afterPlaceOrder.bind(this));
                        return true;
                    }
                    return false;
                },

                validate: function() {
                    var $form = $('#' + this.getCode() + '-form');
                    return $form.validation() && $form.validation('isValid');
                },

                afterPlaceOrder: function () {
                    window.location.replace(url.build('ccavenuepay/ccavenuepay/silentPost/'));
                },

                /** Returns send check to info */
                getMailingAddress: function () {
                    return window.checkoutConfig.payment.checkmo.mailingAddress;
                },

                context: function() {
                    return this;
                },

                getCode: function() {
                    return 'ccavenuepay';
                },

                isActive: function() {
                    return true;
                },

                selectPaymentMethod: function () {
                    selectPaymentMethodAction(this.getData());
                    checkoutData.setSelectedPaymentMethod(this.item.method);
                    return true;
                },

                getActivePayment: function (optPayment){
                    if($.inArray(optPayment, paymentOptions) != -1){
                        return true;
                    }
                    return false;
                },
                
                checkPaymentType: function () {
                    var valType = $('input:radio.payment_card_type:checked').val();
                    if(valType == 'DBCRD'){
                        if(savedDebitCards.length > 0){
                            $('.drp-debit-cards').show();
                            $('.debit-field').hide();
                        }else{
                            $('.drp-debit-cards').hide();
                            $('.debit-field').show();
                        }
                        $('.card-field').hide();
                        $('.drp-credit-cards').hide();
                        $('.credit-card-types').hide();
                        $('.net-field').hide();
                        $('.card-cvv-field').hide();
                        $('#div_dbc_number').show();
                        $('#div_cc_number').hide();
                    }else if(valType == 'CRDC'){
                        if(savedCreditCards.length > 0){
                            $('.drp-credit-cards').show();
                            $('.credit-card-types').hide();
                            $('.card-field').hide();
                            $('.card-cvv-field').hide();
                        }else{
                            $('.drp-credit-cards').hide();
                            $('.credit-card-types').show();
                            $('.card-field').show();
                            $('.card-cvv-field').show();
                        }
                        $('.net-field').hide();
                        $('.debit-field').hide();
                        $('.drp-debit-cards').hide();
                        $('#div_dbc_number').hide();
                        $('#div_cc_number').show();
                    }else{
                        $('.net-field').show();
                        $('.drp-debit-cards').hide();
                        $('.drp-credit-cards').hide();
                        $('.credit-card-types').hide();
                        $('.card-field').hide();
                        $('.debit-field').hide();
                        $('.card-cvv-field').hide();
                    }
                    $('.card-field input[type=text],.card-field input[type=number],.card-cvv-field input[type=number]').val('');
                    $('.card-field select,.debit-field select,.net-field select,.drp-credit-cards select,.drp-debit-cards select').prop('selectedIndex',0);

                    //clear form error
                    $('.card-field input[type=text],.card-field input[type=number],.card-cvv-field input[type=number]').removeClass('mage-error');
                    $('.card-field select,.debit-field select,.net-field select,.drp-credit-cards select,.drp-debit-cards select').removeClass('mage-error');
                    try { $('#ccavenuepay-form').validation('clearError'); }catch(e){}

                    return true;
                },

                callMerchantApi: function() {
                    return window.checkoutConfig.payment.ccavenuepay.MerchantDetails;
                },

                hasVault: function() {
                    var hasVault = window.checkoutConfig.payment.ccavenuepay.vaultStatus;

                    var isCustomerLogin = window.checkoutConfig.payment.ccavenuepay.isCustomerLogin;

                    if(hasVault == 1 && isCustomerLogin == 1){
                        return true;
                    }else{
                        return false;
                    }
                },                

                //get saved credit cards
                getSavedCreditCards: function() {
                    var creditCards = [];
                    $.each(savedCreditCards, function(key, value) {
                        creditCards.push({
                                    'value' : value.payOptId+'--'+value.payCardName+'--'+value.payCardNo,
                                    'type' : value.payCardName+' ending in '+value.payCardNo
                                });
                    });
                    creditCards.push({
                                    'value' : 'new_card',
                                    'type' : 'New Card'
                                });
                    return creditCards;
                },

                checkSavedCreditCard: function() {
                    var credit_card = $('#' + this.getCode() + '_stored_ccards').val();
                    if(credit_card == 'new_card'){
                        $('.credit-card-types').show();
                        $('.card-field').show();
                        $('.card-cvv-field').show();
                    }else if(credit_card != ''){
                        $('.credit-card-types').hide();
                        $('.card-field').hide();
                        $('.card-cvv-field').show();
                        
                        //for amex cvv validation
                        var arrCreditCard = credit_card.split('--');
                        var CardName = arrCreditCard[1];
                        if(CardName == 'Amex'){
                            creditCardData.creditCard = {
                                                            title: 'American Express',
                                                            type: 'AE',
                                                            pattern: '^3([47]\\d*)?$',
                                                            isAmex: true,
                                                            gaps: [4, 10],
                                                            lengths: [15],
                                                            code: {
                                                                name: 'CID',
                                                                size: 4
                                                            }
                                                        };
                        }
                    }else{
                        $('.credit-card-types').hide();
                        $('.card-field').hide();
                        $('.card-cvv-field').hide();
                    }

                    //clear form error
                    $('.card-field input[type=text],.card-field input[type=number],.card-cvv-field input[type=number]').removeClass('mage-error');
                    $('.card-field select,.debit-field select,.net-field select,.drp-credit-cards select,.drp-debit-cards select').removeClass('mage-error');
                    try { $('#ccavenuepay-form').validation('clearError'); }catch(e){}
                    
                    return true;

                },

                //get saved debit cards
                getSavedDebitCards: function() {
                    var debitCards = [];
                    $.each(savedDebitCards, function(key, value) {
                        debitCards.push({
                                    'value' : value.payOptId+'--'+value.payCardName+'--'+value.payCardNo,
                                    'type' : value.payCardName+' ending in '+value.payCardNo
                                });
                    });
                    debitCards.push({
                                    'value' : 'new_card',
                                    'type' : 'New Card'
                                });
                    return debitCards;
                },

                checkSavedDebitCard: function() {
                    var debit_card = $('#' + this.getCode() + '_stored_dcards').val();
                    if(debit_card == 'new_card'){
                        $('.debit-field select').prop('selectedIndex',0);
                        $('.debit-field').show();
                        $('.card-cvv-field').hide();
                        $('.card-field').hide();
                    }else if(debit_card != ''){
                        $('.debit-field select').prop('selectedIndex',0);
                        $('.debit-field').hide();
                        $('.card-cvv-field').show();
                        $('.card-field').hide();
                    }else{
                        $('.debit-field select').prop('selectedIndex',0);
                        $('.debit-field').hide();
                        $('.card-cvv-field').hide();
                        $('.card-field').hide();
                    }

                    //clear form error
                    $('.card-field input[type=text],.card-field input[type=number],.card-cvv-field input[type=number]').removeClass('mage-error');
                    $('.card-field select,.debit-field select,.net-field select,.drp-credit-cards select,.drp-debit-cards select').removeClass('mage-error');
                    try { $('#ccavenuepay-form').validation('clearError'); }catch(e){}

                    return true;

                },

                //get approved net banking list
                getNetBankList: function() {
                    return _.map(netBanks, function(value, key) {
                        return {
                            'value': value,
                            'type': value
                        }
                    });
                },

                //get approved debit card list
                getDebitCardList: function() {
                    return _.map(debitCards, function(value, key) {
                        return {
                            'value': value['cardName'],
                            'type': value['cardName']
                        }
                    });
                },

                getDebitForm: function() {
                    var debit_type = $('#' + this.getCode() + '_debit_type').val();
                    $.each(debitCards, function(key, value) {
                        if(debit_type == value['cardName']){
                            if(value['dataAcceptedAt'] == 'CCAvenue'){
                                $('.card-field').show();
                                $('.card-cvv-field').show();
                            }else{
                                $('.card-field').hide();
                                $('.card-cvv-field').hide();
                            }
                        }
                    });
                    return true;

                },

                //For separating payment options into array
                processData: function(data) {

                    var payOptions = data.payOptions;
                     
                    $.each(payOptions, function() {
                        // this.error shows if any error       
                        // console.log(this.error);
                        paymentOptions.push(this.payOpt);
                        switch(this.payOpt){
                            case 'OPTCRDC':
                                var jsonData = this.cardsList;
                                $.each(jsonData, function() {
                                    creditCards.push(this['cardName']);
                                });
                            break;
                            case 'OPTDBCRD':
                                var jsonData = this.cardsList;
                                $.each(jsonData, function() {
                                    debitCards.push({'cardName' : this['cardName'],
                                        'dataAcceptedAt' : this['dataAcceptedAt']});
                                });
                            break;
                            case 'OPTNBK':
                                var jsonData = this.cardsList;
                                $.each(jsonData, function() {
                                    netBanks.push(this['cardName']);
                                });
                            break;
                            case 'OPTCASHC':
                              var jsonData = this.cardsList;
                              $.each(jsonData, function() {
                                cashCards.push(this['cardName']);
                              });
                            break;
                            case 'OPTMOBP':
                              var jsonData = this.cardsList;
                              $.each(jsonData, function() {
                                mobilePayments.push(this['cardName']);
                              });
                            break;
                        }
                          
                    });

                    var CustPayments = data.CustPayments;
                     
                    $.each(CustPayments, function() {
                        // this.error shows if any error       
                        console.log(this.error);
                        switch(this.payOption){
                            case 'OPTCRDC':
                                savedCreditCards.push({
                                        'payOptId' : this.payOptId,
                                        'payCardName' : this.payCardName,
                                        'payCardNo' : this.payCardNo
                                    });
                            break;
                            case 'OPTDBCRD':
                                savedDebitCards.push({
                                        'payOptId' : this.payOptId,
                                        'payCardName' : this.payCardName,
                                        'payCardNo' : this.payCardNo
                                    });
                            break;
                        }
                          
                    });

                },

                


            });
        }
);
