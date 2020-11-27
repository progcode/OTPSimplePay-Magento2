OTP Simple Magento2
=========================

OTP Simple payment module for Magento2 webshop system.

#### Note
If you would like re-sell this module for your partner, you must be required to pay a one-time license fee. Please contact us here: https://shrt.hu/support 

If you would like use this module in your project, you can do this free.

![](https://s3.amazonaws.com/assets-github/repo/progcode/img/otp_simple.png)

-----------------

 - The customer can choose OTP Simple online credit card payment at checkout
   
 - The customer will be redirected to OTP Simple transaction page, where he 
   can pay his order in a secure environment. After successfully payment the 
   customer will be redirected to Magento2 confirmation page.

 - The customer gets the OTP Simple Payment transaction identifier in email 
   and it is displayed in confirmation page too.

 - The transaction data is displayed in admin area at Sales/Order section.
   
 - Order status is set by automatically depends on success or fail payment. 

----------
> **v.2.3.3:**
>
> - Update credit card logos (MasterCard, Maestro, VISA)
> - Fix composer version
> - Update copyright blocks
>
> **v.2.3.2:**
>
> - Fix virtual order

> **v.2.3.1:**
>
> - LOG_PATH fix

> **v.2.3.0:**
>
> - Refactored version
> - OTP Simple SDK Fixes
> - Supported Magento2 versions: 2.3.x

> **v.2.2.0:**
>
> - Fix MAGE2.3 support, update minimum php version

> **v.2.1.1:**
>
> - Restore cart contents if payment cancelled
> - Fix a BACKREF Internal Server 500 issue - #12
> - Fix a shipping / delivery street address issue on payment site - #12
> - Fix a discount issue on payment site
> - Default readme: HUN
> - Update copyright blocks

> **v.2.1.0:**
>
> - Failed or cancelled transactions now properly redirect to the timeout page
> - You can now add instructions in the admin section that is displayed to the user when selecting this payment method. You can choose to set the mandatory text that OTP requires to be displayed to the user about sharing their data with OTP Mobil Kft. here.
> - SimplePay SDK version 1.0.7 merged with this module. No need to separately install otp-simple-sdk.
> - The frontend name for this module was changed from iconocoders_otpsimple to otpsimple, which may require you to update your IPN addess in your SimplePay admin panel.
> - Fixed a bug that resulted in the net delivery fee being passed to the Simple interface instead of the gross delivery fee.
> - Fixed a bug that caused a routing error if Magento was installed in a subdirectory.
> - Changed some messages in the code to be in line with OTP's current requirements.
> - Magento 2 compatibility: 2.0.9 - 2.2.7

> **v.2.0.0:**
>
> - Public stable version
> - Magento 2 compatibility: 2.0.9 - 2.2.1

> **Dependency:**

> - Composer
> - Magento2 (2.0.9 - 2.2.1)

#### Installation By Composer

Install this module by copying all files to

```
'{magento_root}/app/code/Iconocoders/OtpSimple'
```

#### After installation run next commands

```
php bin/magento module:enable Iconocoders_OtpSimple
```
```
php bin/magento setup:upgrade
```
```
php bin/magento setup:static-content:deploy
```
```
php bin/magento setup:di:compile
```
```
php bin/magento cache:flush
```
----------

#### IPN Settings

You can find IPN setting in OTP Simple Administration GUI. IPN message contain the result of a transaction (success/failed). You must set your Magento endpoint that your Magento can receive IPN messages.

IPN URL structure is next: {magento_domain}/otpsimple/payment/ipn/ (Pl.: https://example.com/otpsimple/payment/ipn/)

----------

Development Contribution
-------------------

If you want to improve this module then you checkout develop branch and create pull request into develop what contains yout modifications.

If you find some bugs then create an issue please.
