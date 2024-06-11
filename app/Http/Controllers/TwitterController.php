<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            $temporaryCredentials = null;
    
            // Wrap the process in a transaction and lock the row to avoid race condition
            DB::transaction(function () use (&$temporaryCredentials) {
                // Retrieve the latest account record with a row-level lock
                $account = Account::lockForUpdate()->latest()->first();
    
                // If there is an existing record and its status is 'Inactive', update it; otherwise, create a new record
                if ($account && $account->status == 'Inactive') {
                    $account->update([
                        'temp_credentials' => serialize($this->server->getTemporaryCredentials()),
                    ]);
                    $temporaryCredentials = $account->temp_credentials;
                } else {
                    $temporaryCredentials = $this->server->getTemporaryCredentials();
                    Account::create([
                        'nama_sosmed' => 'twitter oauth',
                        'token' => "default_token",
                        'temp_credentials' => serialize($temporaryCredentials),
                        'status' => 'Inactive'
                    ]);
                }
            });
    
            // Log the temporary credentials for debugging purposes
            \Log::info('Temporary credentials stored in database.', ['temp' => $temporaryCredentials]);
            
            // Redirect to Twitter's authorization URL
            return redirect($this->server->getAuthorizationUrl(unserialize($temporaryCredentials)));
        } catch (\Exception $e) {
            // Log any errors that occur
            \Log::error('Twitter OAuth Error: ' . $e->getMessage());
    
            // Redirect to the home page with an error message
            return redirect('/')->with('error', 'Failed to authenticate with Twitter.');
        }
    }

    public function handleProviderCallback(Request $request)
    {
        try {
            // Retrieve the serialized temporary credentials from the session
            $account = Account::where('status', 'Inactive')->first();


            
            $serializedTempCredentials = $account->temp_credentials;




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

            $secret = [
                'user' => json_encode($user),
                'token' => [
                    'identifier' => $tokenCredentials->getIdentifier(),
                    'secret' => $tokenCredentials->getSecret()
                ],
            ];

            $account->update([
                'data' => json_encode($secret),
                'status' => 'Active'
            ]);
            

            // dd($user, json_encode($user), $tokenCredentials, json_encode($tokenCredentials), $tokenCredentials->getIdentifier(), $tokenCredentials->getSecret() );


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
