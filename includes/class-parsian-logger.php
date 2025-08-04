<?php
if (!defined('ABSPATH')) exit;

class Parsian_Logger {

    public static function log($message) {
        if (defined('WP_DEBUG') && WP_DEBUG === true) {
            $log_dir = wp_upload_dir()['basedir'] . '/parsian-logs/';
            if (!file_exists($log_dir)) {
                wp_mkdir_p($log_dir);
            }

            $file_path = $log_dir . 'log-' . date('Y-m-d') . '.log';

            $log_entry = sprintf(
                "[%s] %s\n",
                date('Y-m-d H:i:s'),
                is_array($message) || is_object($message) ? print_r($message, true) : $message
            );

            file_put_contents($file_path, $log_entry, FILE_APPEND);
        }
    }
}
