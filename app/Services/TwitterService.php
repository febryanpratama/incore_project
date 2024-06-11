<?php

namespace App\Services;

namespace App\Services;

use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterService
{
    protected $connection;

    public function __construct()
    {
        $this->connection = new TwitterOAuth(
            config('services.twitter.client_id'),
            config('services.twitter.client_secret'),
            session('twitter_oauth_token'),
            session('twitter_oauth_token_secret')
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
