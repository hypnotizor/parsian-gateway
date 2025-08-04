<?php
if (!defined('ABSPATH')) exit;

add_action('plugins_loaded', 'parsian_gateway_init', 11);

function parsian_gateway_init() {
    if (!class_exists('WC_Payment_Gateway')) return;

    require_once __DIR__ . '/class-parsian-gateway.php';
    require_once __DIR__ . '/class-parsian-api.php';
    require_once __DIR__ . '/gateway-functions.php';

    add_filter('woocommerce_payment_gateways', function($methods) {
        $methods[] = 'WC_Parsian_Payment_Gateway';
        return $methods;
    });
}
