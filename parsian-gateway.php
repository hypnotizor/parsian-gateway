<?php
/**
 * Plugin Name: Parsian Bank Payment Gateway for WooCommerce
 * Plugin URI: https://kabook.ir
 * Description: درگاه پرداخت بانک پارسیان مخصوص ووکامرس. توسعه یافته توسط سعید افشاری.
 * Version: 2.0.0
 * Author: Saeid Afshari
 * Author URI: https://kabook.ir
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: parsian-gateway
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit;
}

// اجرای افزونه فقط پس از بارگذاری کامل ووکامرس
add_action('plugins_loaded', 'parsian_gateway_init', 11);
function parsian_gateway_init() {
    if (!class_exists('WC_Payment_Gateway')) return;

    // بارگذاری فایل ترجمه
    load_plugin_textdomain('parsian-gateway', false, dirname(plugin_basename(__FILE__)) . '/languages');

    // بارگذاری فایل‌های اصلی افزونه
    require_once plugin_dir_path(__FILE__) . 'includes/class-parsian-gateway.php';
    require_once plugin_dir_path(__FILE__) . 'includes/class-parsian-api.php';
    require_once plugin_dir_path(__FILE__) . 'includes/class-parsian-utils.php';
    require_once plugin_dir_path(__FILE__) . 'includes/class-parsian-logger.php';

    // ثبت کلاس درگاه پرداخت در ووکامرس
    add_filter('woocommerce_payment_gateways', 'parsian_add_gateway_class');
    function parsian_add_gateway_class($gateways) {
        $gateways[] = 'WC_Parsian_Payment_Gateway';
        return $gateways;
    }
}

// افزودن لینک تنظیمات و لینک توسعه‌دهنده در صفحه افزونه‌ها
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'parsian_gateway_action_links');
function parsian_gateway_action_links($links) {
    $settings_link = '<a href="' . admin_url('admin.php?page=wc-settings&tab=checkout&section=parsian_gateway') . '">' . __('تنظیمات', 'parsian-gateway') . '</a>';
    $about_link = '<a href="https://kabook.ir" target="_blank">' . __('درباره توسعه‌دهنده', 'parsian-gateway') . '</a>';
    array_unshift($links, $settings_link, $about_link);
    return $links;
}
