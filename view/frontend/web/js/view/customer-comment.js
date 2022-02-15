define(
    [
        'ko',
        'jquery',
        'uiComponent'
    ],
    function (ko, $, Component) {
        'use strict';

         var show_comment_blockConfig = window.checkoutConfig.show_comment_block;
         console.log(show_comment_blockConfig);
        return Component.extend({
            defaults: {
                template: 'Dotsquares_Ordercomment/checkout/customer_comment'
            },
            canVisibleBlock: show_comment_blockConfig
        });
    }
);