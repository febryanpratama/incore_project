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
        $this->client = new Client(['base_uri' => 'https://api.twitter.com/1.1/']);
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

    public function fetchTweets($tokenCredentials, $count = 10)
    {
        try {
            $url = 'statuses/user_timeline.json';
            $params = ['count' => $count];
            $headers = $this->getOAuthHeaders('GET', $url, $tokenCredentials, $params);

            $response = $this->client->get($url, [
                'headers' => $headers,
                'query' => $params,
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            Log::error('Twitter API Error: '.$e->getMessage());
            return false;
        }
    }
}