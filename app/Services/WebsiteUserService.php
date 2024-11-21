<?php

namespace App\Services;

use App\ConversationWebsite;
use App\Transaction;
use App\UserTemplate;
use Carbon\Carbon;
use Illuminate\Support\Str;


class WebsiteUserService {
    
    public function getConversationWebsite(){


        $response = $this->baseApiGet('https://api-sahabatjiwa.indonesiacore.com/api/curhat/create-session-website');

        // dd($response);
        
        if(!$response['status']){
            return [
                "status" => false,
                "message" => $response['message']
            ];
        }

        $createSession = ConversationWebsite::create([
            'conversation_id' => $response['data'][0]['conversationId'],
            "user_id" => auth()->user()->id
        ]);
        
        return [
            "status" => true,
            "message" => "Success",
            "data" => $response['data']
        ];
    }

    public function getListConversationWebsite(){
        $data = ConversationWebsite::where("user_id", auth()->user()->id)->first();
        if(!$data) {
            return [
                "status" => false,
                "message" => "Data not found"
            ];
        }
        
        $body = [
            "conversation_id" => $data->conversation_id,
        ];

        $response = $this->baseApiPost('https://api-sahabatjiwa.indonesiacore.com/api/curhat/detail', $body);
        
        if(!$response['status']){
            return [
                "status" => false,
                "message" => $response['message']
            ];
        }

        return [
            "status" => true,
            "message" => "Success",
            "data" => $response['data']
        ];
    }

    public function sendMessage($data){
        
        $body = [
            "conversation_id" => $data['conversation_id'],
            "prompt" => $data['text']
        ];
        $response = $this->baseApiPost('https://api-sahabatjiwa.indonesiacore.com/api/curhat/store-detail-chatgpt', $body);
        
        if(!$response['status']){
            return [
                "status" => false,
                "message" => $response['message']
            ];
        }

        return [
            "status" => true,
            "message" => "Success",
            "data" => $response['data']
        ];
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

        // dd($response);
        return [
            'status' => true,
            'message' => 'Success',
            'data' => $response['data']
        ];

    }

    private function baseApiGet($url){

        try {
            //code...
            $token = env('TOKEN_SAHABATJIWA');
    
            $curl = curl_init();
        
            // Menambahkan parameter query ke URL
            $url = $url;
        
            curl_setopt_array($curl, [
                CURLOPT_FRESH_CONNECT  => true,
                CURLOPT_URL            => $url, // URL sudah termasuk query parameters
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER         => false,
                CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$token],
                CURLOPT_FAILONERROR    => false,
                CURLOPT_SSL_VERIFYPEER => false,
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


            if($response["errorCode"] != 0){
                return [
                    'status' => false,
                    'message' => $response["message"]
                ];
            }

            return [
                'status' => true,
                'message' => 'Success',
                'data' => $response['result']
            ];

        } catch (\Throwable $th) {
            //throw $th;

            return [
                'status' => false,
                'message' => $th->getMessage()
            ];
        }
    }

    private function baseApiPost($url, $data){

        try {
            //code...
            $token = env('TOKEN_SAHABATJIWA');
    
            $curl = curl_init();
        
            // Menambahkan parameter query ke URL
            $url = $url;
        
            curl_setopt_array($curl, [
                CURLOPT_FRESH_CONNECT  => true,
                CURLOPT_URL            => $url, // URL sudah termasuk query parameters
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER         => false,
                CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$token],
                CURLOPT_FAILONERROR    => false,
                CURLOPT_POSTFIELDS     => http_build_query($data),
                CURLOPT_SSL_VERIFYPEER => false,
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

            // dd($response);
        
            $response = json_decode($response, true);


            if($response["errorCode"] != 0){
                return [
                    'status' => false,
                    'message' => $response["message"]
                ];
            }

            return [
                'status' => true,
                'message' => 'Success',
                'data' => $response['result']
            ];

        } catch (\Throwable $th) {
            //throw $th;

            return [
                'status' => false,
                'message' => $th->getMessage()
            ];
        }
    }



    // private function baseApiPost($url, $data){

    //     // dd($data);

    //     $token = env('TOKEN_SAHABATJIWA');

    //     $curl = curl_init();

    //     curl_setopt_array($curl, [
    //         CURLOPT_FRESH_CONNECT  => true,
    //         CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/transaction/create',
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_HEADER         => false,
    //         CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$token],
    //         CURLOPT_FAILONERROR    => false,
    //         CURLOPT_POST           => true,
    //         CURLOPT_SSL_VERIFYPEER => false,
    //         CURLOPT_POSTFIELDS     => http_build_query($data),
    //         CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
    //     ]);

    //     $response = curl_exec($curl);
    //     $error = curl_error($curl);

    //     curl_close($curl);

    //     if($error){
    //         return [
    //             'status' => false,
    //             'message' => $error
    //         ];
    //     }

    //     $response = json_decode($response, true);

    //     return [
    //         'status' => true,
    //         'message' => 'Success',
    //         'data' => $response['data']
    //     ];
    // }
}

?>