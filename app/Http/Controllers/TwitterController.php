<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use League\OAuth1\Client\Credentials\TemporaryCredentials;
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
            // Obtain temporary credentials from Twitter
            $temporaryCredentials = $this->server->getTemporaryCredentials();

            dd(serialize($temporaryCredentials));
            

            // Serialize the temporary credentials before storing in the session
            // Session::put('oauth.temp', serialize($temporaryCredentials));

            // dd(Session::get('oauth.temp'));

            // Log the temporary credentials for debugging purposes
            // dd(Session::get('oauth.temp'));
            \Log::info('Temporary credentials stored in session.', ['temp' => $temporaryCredentials]);

            // Redirect to Twitter's authorization URL
            return redirect($this->server->getAuthorizationUrl($temporaryCredentials));
        } catch (\Exception $e) {
            // Log any errors that occur
            \Log::error('Twitter OAuth Error: ' . $e->getMessage());

            // Redirect to the home page with an error message
            dd($e->getMessage());
            return redirect('/')->with('error', 'Failed to authenticate with Twitter.');
        }
    }

    public function handleProviderCallback(Request $request)
    {
        try {
            // Retrieve the serialized temporary credentials from the session
            $serializedTempCredentials = Session::get('oauth.temp');

            // dd($serializedTempCredentials);
            // Check if the session key exists and unserialize the temporary credentials
            if ($serializedTempCredentials) {
                $temporaryCredentials = unserialize($serializedTempCredentials);
            } else {
                throw new \Exception('Temporary credentials not found in session.');
            }

            // Ensure the unserialized object is of the correct type
            if (!$temporaryCredentials instanceof TemporaryCredentials) {
                throw new \Exception('Invalid temporary credentials type.');
            }

            // Log the temporary credentials for debugging purposes
            \Log::info('Temporary credentials retrieved from session.', ['temp' => $temporaryCredentials]);

            // Obtain token credentials from Twitter using the temporary credentials and the verifier
            $tokenCredentials = $this->server->getTokenCredentials(
                $temporaryCredentials,
                $request->get('oauth_token'),
                $request->get('oauth_verifier')
            );

            // Get the user's details from Twitter
            $user = $this->server->getUserDetails($tokenCredentials);

            // Store the token credentials in the session
            Session::put('twitter_oauth_token', $tokenCredentials);

            dd($tokenCredentials);
            // Redirect to the home page with a success message
            return redirect('/')->with('status', 'Successfully authenticated with Twitter!');
        } catch (\Exception $e) {
            // Log any errors that occur
            \Log::error('Twitter OAuth Error: ' . $e->getMessage());

            // Redirect to the home page with an error message
            dd($e->getMessage());
            return redirect('/')->with('error', $e->getMessage());
        }
    }

    // Rest of the controller methods
}
