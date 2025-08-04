<?php
if (!defined('ABSPATH')) exit;

class WC_Parsian_Settings {

    public static function get_settings() {
        return [
            'enabled' => [
                'title'   => __('فعال/غیرفعال', 'parsian-gateway'),
                'type'    => 'checkbox',
                'label'   => __('فعال کردن درگاه پارسیان', 'parsian-gateway'),
                'default' => 'yes',
            ],
            'title' => [
                'title'       => __('عنوان نمایشی درگاه', 'parsian-gateway'),
                'type'        => 'text',
                'default'     => __('پرداخت با کارت‌های بانکی', 'parsian-gateway'),
                'desc_tip'    => true,
                'description' => __('عنوانی که در صفحه پرداخت نمایش داده می‌شود', 'parsian-gateway'),
            ],
            'description' => [
                'title'       => __('توضیح درگاه', 'parsian-gateway'),
                'type'        => 'textarea',
                'default'     => __('پرداخت امن از طریق بانک پارسیان (PEC)', 'parsian-gateway'),
            ],
            'terminal_id' => [
                'title'       => __('Terminal ID', 'parsian-gateway'),
                'type'        => 'text',
                'description' => __('ترمینال کد دریافتی از بانک پارسیان', 'parsian-gateway'),
                'desc_tip'    => true,
            ],
            'custom_logo' => [
                'title'       => __('لوگوی سفارشی', 'parsian-gateway'),
                'type'        => 'text',
                'description' => __('آدرس کامل یک تصویر PNG یا JPG برای نمایش روی فرم پرداخت (مثلاً لوگوی بانک)', 'parsian-gateway'),
                'desc_tip'    => true,
                'default'     => '',
            ],
            'success_message' => [
                'title'   => __('پیام موفق', 'parsian-gateway'),
                'type'    => 'textarea',
                'default' => __('پرداخت با موفقیت انجام شد. شماره پیگیری: {RRN}', 'parsian-gateway'),
            ],
            'failed_message' => [
                'title'   => __('پیام ناموفق', 'parsian-gateway'),
                'type'    => 'textarea',
                'default' => __('پرداخت ناموفق بود. لطفاً مجدداً تلاش نمایید.', 'parsian-gateway'),
            ],
        ];
    }

}
'plugin_info_title' => [
    'title' => __('اطلاعات افزونه', 'parsian-gateway'),
    'type'  => 'title',
    'description' => __('برای حمایت از توسعه‌دهنده می‌توانید از وبسایت بازدید کنید یا بازخورد ارسال نمایید.', 'parsian-gateway'),
],
'plugin_website' => [
    'title'       => __('وبسایت افزونه', 'parsian-gateway'),
    'type'        => 'text',
    'description' => __('آدرس سایت افزونه (مثلاً https://kabook.ir)', 'parsian-gateway'),
    'default'     => 'https://kabook.ir',
],
'developer_website' => [
    'title'       => __('سازنده افزونه', 'parsian-gateway'),
    'type'        => 'text',
    'description' => __('آدرس سایت یا پروفایل شما', 'parsian-gateway'),
    'default'     => 'https://kabook.ir',
],
