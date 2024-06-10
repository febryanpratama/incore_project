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
        $temporaryCredentials = $this->server->getTemporaryCredentials();
        session(['oauth.temp' => $temporaryCredentials]);

        return redirect($this->server->getAuthorizationUrl($temporaryCredentials));
    }

    public function handleProviderCallback(Request $request)
    {
        $temporaryCredentials = session('oauth.temp');

        $tokenCredentials = $this->server->getTokenCredentials(
            $temporaryCredentials,
            $request->get('oauth_token'),
            $request->get('oauth_verifier')
        );

        $user = $this->server->getUserDetails($tokenCredentials);

        // Store user information and token credentials
        session(['twitter_oauth_token' => $tokenCredentials]);

        return redirect('/')->with('status', 'Successfully authenticated with Twitter!');
    }
}