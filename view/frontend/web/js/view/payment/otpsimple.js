/*browser:true*/
/*global define*/
define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'otpsimple',
                component: 'Iconocoders_OtpSimple/js/view/payment/method-renderer/otpsimple-method'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);
