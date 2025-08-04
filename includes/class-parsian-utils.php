<?php
if (!defined('ABSPATH')) exit;

class Parsian_Utils {

    public static function get_status_message($status_code) {
        $messages = [
            0 => __('عملیات موفق', 'parsian-gateway'),
            -1 => __('خطای سرور', 'parsian-gateway'),
            -101 => __('احراز هویت پذیرنده ناموفق', 'parsian-gateway'),
            -111 => __('مبلغ تراکنش بیش از حد مجاز', 'parsian-gateway'),
            -126 => __('کد پذیرنده نامعتبر', 'parsian-gateway'),
            -130 => __('توکن منقضی شده', 'parsian-gateway'),
            -138 => __('لغو توسط کاربر', 'parsian-gateway'),
            -32768 => __('خطای ناشناخته', 'parsian-gateway')
        ];

        return $messages[$status_code] ?? sprintf(__('خطای ناشناخته (کد: %d)', 'parsian-gateway'), $status_code);
    }
}
