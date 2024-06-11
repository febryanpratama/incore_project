<?php

namespace App\Services;

namespace App\Services;

use Abraham\TwitterOAuth\TwitterOAuth;
use App\Account;
use Illuminate\Support\Facades\Auth;

class TwitterService
{
    protected $connection;
    public $id;

    public function __construct()
    {

        $accountTwitter = Account::where('app', 'Twitter')->where('user_id', 6)->where('status', 'Active')->first();

        $getToken = json_decode($accountTwitter->data);

        // dd(config('services.twitter.bearer_token'));

        $this->connection = new TwitterOAuth(
            config('services.twitter.client_id'),
            config('services.twitter.client_secret'),
            $getToken->token,
            $getToken->tokenSecret,
            // config('services.twitter.bearer_token')
        );

        $this->connection->setApiVersion('2');
    }

    public function getUserTimeline($userId)
    {
        $response = $this->connection->post('statuses/update', ['status' => "Hello World!"]);


        return $response;

        // dd($response);
    }

    public function postTweet($status)
    {
        return $this->connection->post('statuses/update', ['status' => $status]);
    }

    // Add other methods to interact with Twitter API v2 as needed

    
}
