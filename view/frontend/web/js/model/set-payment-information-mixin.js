/*jshint browser:true jquery:true*/
/*global alert*/
define([
    'jquery',
    'mage/utils/wrapper',
    'Dotsquares_Ordercomment/js/model/fields-assigner'
], function ($, wrapper, fieldsAssigner) {
    'use strict';

    return function (placeOrderAction) {

        /** Override place-order-mixin for set-payment-information action as they differs only by method signature */
        return wrapper.wrap(placeOrderAction, function (originalAction, messageContainer, paymentData) {
            fieldsAssigner(paymentData);

            return originalAction(messageContainer, paymentData);
        });
    };
});