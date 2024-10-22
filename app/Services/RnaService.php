<?php

namespace App\Services;

class RnaService {

    public function _registerRna($data)
    {

        // dd($company);

        // if (!$city) {
        //     return [
        //         'status' => false,
        //         'message' => 'Your City ID is not valid'
        //     ];
        // }

        $data = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'password_confirmation' => $data['password'],
            'organization' => 'tokotoko',
            'street_1' => $data['Address'],
            'city' => $data['kota'],
            'country_code' => 'ID',
            'voice' => $data['telpon'],
            'postal_code' => '78116'
        ];

        $url = 'https://api.sandbox-rna.id/api/v1/customers';

        $apiKey = "Kf9EzTpbP3NWqcI4kcUt5qx47clAuxg5";
        $reseller_id = "19";

        $ch = curl_init($url);

        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); // Set HTTP Basic Authentication
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_USERPWD, "$reseller_id:$apiKey"); // Set the username and password
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disables SSL verification (unsafe for production)
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set the Content-Type header

        // Execute cURL request
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }

        // Close cURL session
        curl_close($ch);

        $responseData = json_decode($response, true);

        // dd($responseData);
        return [
            'status' => true,
            'message' => "Successfully Insert Data",
            'data' => $responseData
        ];
    }

    public function getPrice($data_domain)
    {
        try {
            //code...
            $domain = $data_domain;
            $domain_parts = explode(".", $domain);
    
            if (count($domain_parts) > 2) {
                $extension = '.' . $domain_parts[1] . '.' . $domain_parts[2];
            } else {
                $extension = '.' . $domain_parts[1];
            }
    
            $url = 'https://api.sandbox-rna.id/api/v1/account/prices?domainExtension%5Bextension%5D=' . $extension . '&promo=false&page=1&limit=20';
    
            $apiKey = "Kf9EzTpbP3NWqcI4kcUt5qx47clAuxg5";
            $reseller_id = "19";
    
            $ch = curl_init($url);
    
            // Set cURL options
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); // Set HTTP Basic Authentication
            curl_setopt($ch, CURLOPT_USERPWD, "$reseller_id:$apiKey"); // Set the username and password
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disables SSL verification (unsafe for production)
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set the Content-Type header
    
            // Execute cURL request
            $response = curl_exec($ch);
    
            // Check for errors
            if (curl_errno($ch)) {
                echo 'Error: ' . curl_error($ch);
            }
    
            // Close cURL session
            curl_close($ch);
    
            $responseData = json_decode($response, true);
    
            // dd($responseData['data'][0]['registration'][1]);
            return [
                'status' => true,
                'message' => "success",
                "data" => $responseData['data'][0]['registration'][1]
            ];
        } catch (\Throwable $th) {
            //throw $th;
            return back()->withErrors("Internal Server Error");
        }
    }
}