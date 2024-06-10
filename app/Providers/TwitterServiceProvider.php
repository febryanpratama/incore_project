<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use League\OAuth1\Client\Server\Twitter as TwitterServer;

class TwitterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(TwitterServer::class, function ($app) {
            return new TwitterServer([
                'identifier' => config('services.twitter.client_id'),
                'secret' => config('services.twitter.client_secret'),
                'callback_uri' => config('services.twitter.redirect'),
            ]);
        });
    }

    public function boot()
    {
        //
    }
}
