<?php
if (!defined('ABSPATH')) exit;

class Parsian_API {

    protected static $sale_url = 'https://pec.shaparak.ir/NewIPGServices/Sale/SaleService.asmx?wsdl';
    protected static $verify_url = 'https://pec.shaparak.ir/NewIPGServices/Confirm/ConfirmService.asmx?wsdl';

    public static function send_payment_request($data) {
        try {
            $client = new SoapClient(self::$sale_url, ['encoding' => 'UTF-8']);
            $response = $client->SalePaymentRequest(['requestData' => $data]);

            $result = (array) $response->SalePaymentRequestResult;
            Parsian_Logger::log(['ارسال به بانک' => $result]);

            return $result;
        } catch (Exception $e) {
            Parsian_Logger::log(['خطا در ارسال به بانک' => $e->getMessage()]);
            return ['Status' => -1, 'Message' => $e->getMessage()];
        }
    }

    public static function verify_payment($terminal_id, $token) {
        $data = [
            'LoginAccount' => $terminal_id,
            'Token' => $token
        ];

        try {
            $client = new SoapClient(self::$verify_url, ['encoding' => 'UTF-8']);
            $response = $client->ConfirmPayment(['requestData' => $data]);

            $result = (array) $response->ConfirmPaymentResult;
            Parsian_Logger::log(['تأیید پرداخت' => $result]);

            return $result;
        } catch (Exception $e) {
            Parsian_Logger::log(['خطا در تأیید پرداخت' => $e->getMessage()]);
            return ['Status' => -1, 'Message' => $e->getMessage()];
        }
    }
}
