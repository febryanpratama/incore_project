<?php

namespace App\Services;

namespace App\Services;

use Abraham\TwitterOAuth\TwitterOAuth;
use App\Account;
use Illuminate\Support\Facades\Auth;

class TwitterService
{
    protected $connection;

    public function __construct()
    {
        $accountTwitter = Account::where('app', 'Twitter')->where('user_id', Auth::user()->id)->where('status', 'Active')->first();

        $getToken = json_decode($accountTwitter->data);

        $this->connection = new TwitterOAuth(
            config('services.twitter.client_id'),
            config('services.twitter.client_secret'),
            $getToken->token,
            $getToken->tokenSecret
        );
    }

    public function getUserTimeline($userId)
    {
        return $this->connection->get('statuses/user_timeline', ['user_id' => $userId]);
    }

    public function postTweet($status)
    {
        return $this->connection->post('statuses/update', ['status' => $status]);
    }

    // Add other methods to interact with Twitter API v2 as needed
}
