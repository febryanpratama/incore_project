<?php

namespace App\Services;

use GuzzleHttp\Client;
use League\OAuth1\Client\Server\Twitter as TwitterServer;
use Illuminate\Support\Facades\Log;

class TwitterService
{
    protected $server;
    protected $client;

    public function __construct(TwitterServer $server)
    {
        $this->server = $server;
        $this->client = new Client(['base_uri' => 'https://api.twitter.com/']);
    }

    protected function getOAuthHeaders($method, $url, $tokenCredentials, $params = [])
    {
        $uri = 'https://api.twitter.com/1.1/'.$url;
        $headers = $this->server->getHeaders($tokenCredentials, $method, $uri, $params);
        return ['Authorization' => $headers['Authorization']];
    }

    public function tweet($tokenCredentials, $status)
    {
        try {
            $url = 'statuses/update.json';
            $params = ['status' => $status];
            $headers = $this->getOAuthHeaders('POST', $url, $tokenCredentials, $params);

            $response = $this->client->post($url, [
                'headers' => $headers,
                'form_params' => $params,
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            Log::error('Twitter API Error: '.$e->getMessage());
            return false;
        }
    }

    public function fetchTweets($tokenCredentials)
    {
        // dd($tokenCredentials);
        // Prepare the headers for the request
        $uri = '2/users';
        $method = 'GET';
        $params = [
            'id' => '1716803916443336704'
            // 'tweet.fields' => 'created_at,1716803916443336704,text',
            // 'ids' => null // Replace with actual tweet IDs
        ];

        $url = 'https://api.twitter.com/2/users/' . http_build_query($params);

        // dd($url);
        // Get the OAuth1.0a authorization header
        // $headers = $this->server->getHeaders($tokenCredentials, $method, $url, $params);
        $headers = $this->server->getHeaders($tokenCredentials, 'GET', $url);

        // dd($headers);
        // Make the request to the Twitter API v2
        $response = $this->client->request($method, $uri, [
            'headers' => $headers,
        ]);


        dd($response);
        // Decode and return the response
        return json_decode($response->getBody()->getContents(), true);
    }
}