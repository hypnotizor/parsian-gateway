<?php
if (!defined('ABSPATH')) exit;

/**
 * دریافت پیام متنی بر اساس کد وضعیت
 *
 * @param int $status_code
 * @return string
 */
function parsian_get_status_message($status_code) {
    $messages = [
        0 => __('عملیات موفق', 'parsian-gateway'),
        -1 => __('خطای سرور یا ارتباط با بانک', 'parsian-gateway'),
        -101 => __('احراز هویت پذیرنده ناموفق', 'parsian-gateway'),
        -111 => __('مبلغ تراکنش بیش از حد مجاز', 'parsian-gateway'),
        -126 => __('کد پذیرنده نامعتبر است', 'parsian-gateway'),
        -130 => __('توکن منقضی شده یا نامعتبر است', 'parsian-gateway'),
        -138 => __('پرداخت توسط کاربر لغو شد', 'parsian-gateway'),
        -32768 => __('خطای ناشناخته', 'parsian-gateway')
    ];

    return $messages[$status_code] ?? sprintf(__('خطای ناشناخته (کد: %d)', 'parsian-gateway'), $status_code);
}
