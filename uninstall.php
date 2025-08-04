<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// حذف تنظیمات ذخیره شده در گزینه‌های وردپرس
delete_option('woocommerce_parsian_gateway_settings');
delete_site_option('woocommerce_parsian_gateway_settings');

// حذف متادیتای سفارشات مربوط به افزونه
global $wpdb;

// حذف متادیتای توکن و شماره پیگیری پرداخت در جدول متای سفارش‌ها
$meta_keys = ['_parsian_token', '_parsian_ref_id'];

foreach ($meta_keys as $meta_key) {
    $wpdb->query(
        $wpdb->prepare(
            "DELETE FROM {$wpdb->postmeta} WHERE meta_key = %s",
            $meta_key
        )
    );
}
