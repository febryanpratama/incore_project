<?php

namespace App\Services;

use App\Transaction;
use App\UserTemplate;
use Carbon\Carbon;
use Illuminate\Support\Str;


class TripayService {
    
    public function getChannel(){
        $response = $this->baseApi('https://tripay.co.id/api-sandbox/merchant/payment-channel', 'GET');
        
        return $response;
    }

    public function setTransaction($data){

        // $apiKey       = env('TRIPAY_API_KEY');
        $privateKey   = env('TRIPAY_PRIVATE_KEY');
        $merchantCode = env('TRIPAY_MERCHANT_CODE');
        $merchantRef  = 'INV-'.Carbon::now()->format('d-m-Y').'-'.time();

        // dd($data['total_amount']);
        $postData = [
            'method'         => $data['method'],
            'merchant_ref'   => $merchantRef, // SET KODE MERCHAT
            'amount'         => $data['total_amount'],
            'customer_name'  => $data['nama'],
            'customer_email' => $data['email'],
            'customer_phone' => $data['telpon'],
            'order_items'    => $data['order_items'],
            'return_url'   => env('SITE_URL').'checkout/status',
            'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
            'signature'    => hash_hmac('sha256', $merchantCode.$merchantRef.$data['total_amount'], $privateKey)
        ];

        $response = $this->baseApiPost('https://tripay.co.id/api-sandbox/transaction/create', $postData);
        
        $respCreateTransaction = Transaction::create([
            'reference' => $response['data']['reference'],
            'merchant_ref' => $response['data']['merchant_ref'],
            'payment_selection_type' => $response['data']['payment_selection_type'],
            'payment_method' => $response['data']['payment_method'],
            'payment_name' => $response['data']['payment_name'],
            'customer_name' => $response['data']['customer_name'],
            'customer_email' => $response['data']['customer_email'],
            'customer_phone' => $response['data']['customer_phone'],
            'callback_url' => $response['data']['callback_url'],
            'return_url' => $response['data']['return_url'],
            'amount' => $response['data']['amount'],
            'fee_merchant' => $response['data']['fee_merchant'],
            'fee_customer' => $response['data']['fee_customer'],
            'total_fee' => $response['data']['total_fee'],
            'amount_received' => $response['data']['amount_received'],
            'pay_code' => $response['data']['pay_code'],
            'pay_url' => $response['data']['pay_url'],
            'checkout_url' => $response['data']['checkout_url'],
            'status' => $response['data']['status'],
            'expired_time' => $response['data']['expired_time'],
            'order_items' => json_encode($response['data']['order_items'])
        ]);

        UserTemplate::create([
            'reference' => $response['data']['reference'],
            'unique_store' => Str::slug(time().$response['data']['customer_name']),
            'template_id' => $data['template_id'],
        ]);

        return $respCreateTransaction;
    }

    private function baseApi($url, $method, $data=[]){
        $apiKey = env('TRIPAY_API_KEY');

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_FRESH_CONNECT  => true,
        CURLOPT_URL            => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_FAILONERROR    => false,
        CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        if($error){
            return [
                'status' => false,
                'message' => $error
            ];
        }

        $response = json_decode($response, true);

        return [
            'status' => true,
            'message' => 'Success',
            'data' => $response['data']
        ];

    }

    private function baseApiPost($url, $data){

        // dd($data);

        $apiKey = env('TRIPAY_API_KEY');

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/transaction/create',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_POST           => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_POSTFIELDS     => http_build_query($data),
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        if($error){
            return [
                'status' => false,
                'message' => $error
            ];
        }

        $response = json_decode($response, true);

        // dd($response);
        return [
            'status' => true,
            'message' => 'Success',
            'data' => $response['data']
        ];
    }
}

?>