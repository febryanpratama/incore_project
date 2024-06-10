<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\OAuth1\Client\Server\Twitter as TwitterServer;

class TwitterController extends Controller
{
    protected $server;

    public function __construct(TwitterServer $server)
    {
        $this->server = $server;
    }

    public function redirectToProvider()
    {
        try {
            $temporaryCredentials = $this->server->getTemporaryCredentials();
            session(['oauth.temp' => $temporaryCredentials]);

            \Log::info('Temporary credentials stored in session.', ['temp' => $temporaryCredentials]);

            return redirect($this->server->getAuthorizationUrl($temporaryCredentials));
        } catch (\Exception $e) {
            \Log::error('Twitter OAuth Error: ' . $e->getMessage());
            return redirect('/')->with('error', 'Failed to authenticate with Twitter.');
        }
    }

    public function handleProviderCallback(Request $request)
    {
        try {
            $temporaryCredentials = session('oauth.temp');

            \Log::info('Temporary credentials retrieved from session.', ['temp' => $temporaryCredentials]);

            $tokenCredentials = $this->server->getTokenCredentials(
                $temporaryCredentials,
                $request->get('oauth_token'),
                $request->get('oauth_verifier')
            );

            $user = $this->server->getUserDetails($tokenCredentials);

            session(['twitter_oauth_token' => $tokenCredentials]);

            return redirect('/')->with('status', 'Successfully authenticated with Twitter!');
        } catch (\Exception $e) {
            \Log::error('Twitter OAuth Error: ' . $e->getMessage());
            return redirect('/')->with('error', 'Failed to authenticate with Twitter.');
        }
    }
}