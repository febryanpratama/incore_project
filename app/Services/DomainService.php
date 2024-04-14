<?php

namespace App\Services;

class DomainService {
    public function checkListDomain($data){

        try {
            $url = 'https://apionlineshop.indonesiacore.com/api/search-domain';
    
            // Data to be sent in the POST request
            $list = [
                'domain' => 'febryancpratama'
            ];
            
            // Initialize cURL session
            $ch = curl_init($url);
            
            // Set cURL options
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // Return response as a string
            curl_setopt($ch, CURLOPT_POST, true);            // Set as POST request
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($list));     // Set POST data
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disables SSL verification (keep this enabled in production
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json'              // Assuming JSON request
            ));
            
            // Execute cURL session and capture the response
            $response = curl_exec($ch);
            
            // Check for cURL errors
            if(curl_errno($ch)) {
                echo 'Error: ' . curl_error($ch);
            }
            
            // Close cURL session
            curl_close($ch);
            
            // Handle the response (for example, outputting it)
            $data = json_decode($response, true);
            // dd($data);

            // dd($data['data']);
            if($data['status'] == true){
                // dd("true");
                return [
                    'status' => true,
                    'message' => $data['message'],
                    'data' => $data['data']
                ];
            }else{
                // dd("false");
                return [
                    'status' => false,
                    'message' => $data['message'],
                    'data' => $data['data']
                ];
            }
            
        } catch (\Throwable $th) {
            //throw $th;

            return [
                'status' => false,
                'message' => $th->getMessage()
            ];
        }

    }
}