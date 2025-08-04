=== Parsian Bank Payment Gateway for WooCommerce ===
Contributors: saeidafshari  
Tags: woocommerce, payment gateway, parsian bank, pec.ir, iran, payment, e-commerce  
Requires at least: 5.6  
Tested up to: 6.7  
Requires PHP: 7.2  
Stable tag: 2.0.0  
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  

A secure, modern, and fully localized payment gateway for Parsian Bank (Pec.ir) built for WooCommerce. Developed with clean code standards and best practices.

== Description ==
The **Parsian Bank Payment Gateway** plugin enables seamless and secure payments using Parsian Bank’s InPage API. Tailored for Iranian merchants using WooCommerce, this plugin offers complete support for SOAP-based bank communication, transaction verification, and error handling.

Built by **Saeid Afshari**, a developer and digital wellness expert behind [kabook.ir](https://kabook.ir), this plugin combines reliability with code clarity and full internationalization support.

**Key Features:**
- ✅ Secure InPage integration with Parsian Bank
- ✅ Supports WooCommerce 8.x and WordPress 6.x+
- ✅ Fully translated into Persian (fa_IR)
- ✅ Uses SOAP for request and verification
- ✅ Custom success and failure messages
- ✅ Clean object-oriented code (OOP)
- ✅ Supports HTTPS-only for security
- ✅ Compatible with PHP 7.2+

== Installation ==
1. Upload the plugin ZIP via **Plugins > Add New > Upload Plugin**
2. Activate the plugin through the Plugins menu
3. Go to **WooCommerce > Settings > Payments > Parsian Bank**
4. Enter your **Terminal ID** and configure your settings

== Frequently Asked Questions ==
= Does this plugin require SOAP? =  
Yes. Your server must have the PHP SOAP extension installed and enabled.

= Is HTTPS mandatory? =  
Yes. Secure SSL communication is required for payment requests and callbacks.

= Can I use a custom logo on the payment page? =  
Yes. You can upload any image URL (e.g. PNG, 120x60px) via plugin settings.

= Where can I get technical support? =  
You can contact the developer at [kabook.ir](https://kabook.ir) or by email: support@kabook.ir

== Settings ==
* **Enable Gateway**: Activate or deactivate the payment method
* **Title**: Payment method title shown during checkout
* **Description**: Payment method description
* **Terminal ID**: Provided by Parsian Bank
* **Success Message**: Displayed upon successful payment
* **Failed Message**: Displayed when payment fails
* **Developer Link**: Visit the plugin author’s website

== Changelog ==
= 2.0.0 - 2025-08-01 =
* Major plugin refactor for performance and maintainability
* Added uninstall script for clean removal
* Added `.pot` and `.po` files for localization
* Enhanced admin settings page with custom branding
* Improved error handling and token validation
* Improved support for WooCommerce 8.x+

= 1.2.0 - 2024-06-14 =
* Fixed "Access Denied" error when saving Terminal ID
* Added default Parsian Bank logo on payment page
* Added support for custom logo upload
* Enhanced SSL security for bank communication
* Optimized code to prevent security warnings

= 1.1.0 - 2024-05-05 =
* Added support for latest WooCommerce versions
* Improved error handling
* Added full Persian translation
* Implemented advanced logging system

= 1.0.0 - 2024-03-30 =
* Initial release
* Implemented core payment flow
* Callback and verification handling
* Transaction management

== Credits ==
Developed by **Saeid Afshari**  
Digital wellness expert and full-stack developer  
Website: [https://kabook.ir](https://kabook.ir)  
Email: support@kabook.ir

== License ==
This plugin is free software and open source, licensed under the GPLv2 (or later). You are free to use, modify, and distribute it under the same license.
