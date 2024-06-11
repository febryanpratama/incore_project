<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use League\OAuth1\Client\Credentials\TemporaryCredentials;
use League\OAuth1\Client\Server\Twitter as TwitterServer;
use App\Services\TwitterService;

class TwitterController extends Controller
{
    protected $server;
    protected $twitterService;

    public function __construct(TwitterServer $server, TwitterService $twitterService)
    {
        $this->server = $server;
        $this->twitterService = $twitterService;
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
                    $token = $account->temp_credentials;
                    
                } else {

                    $temporaryCredentials = $this->server->getTemporaryCredentials();

                    $token = serialize($temporaryCredentials);
                    Account::create([
                        'user_id' => Auth::user()->id,
                        'nama_sosmed' => 'twitter oauth',
                        'token' => "default_token",
                        'app' => 'Twitter',
                        'temp_credentials' => $token,
                        'status' => 'Inactive'
                    ]);
                    return redirect($this->server->getAuthorizationUrl(unserialize($token)));
                }
            });
    
            // Log the temporary credentials for debugging purposes
            \Log::info('Temporary credentials stored in database.', ['temp' => $token ?? $temporaryCredentials]);
            
            // Redirect to Twitter's authorization URL
            return redirect($this->server->getAuthorizationUrl($temporaryCredentials));
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
                'user' => $user,
                // 'token' => [
                //     'identifier' => $tokenCredentials->getIdentifier(),
                //     'secret' => $tokenCredentials->getSecret()
                // ],
            ];

            $account->update([
                'data' => json_encode($secret),
                'token_serialize_tweet' => serialize($tokenCredentials),
                'status' => 'Active'
            ]);
            

            // dd($user, json_encode($user), $tokenCredentials, json_encode($tokenCredentials), $tokenCredentials->getIdentifier(), $tokenCredentials->getSecret() );


            // Redirect to the home page with a success message
            return redirect('user/account-sosmed')->with('status', 'Successfully authenticated with Twitter!');
        } catch (\Exception $e) {
            // Log any errors that occur
            \Log::error('Twitter OAuth Error: ' . $e->getMessage());

            // Redirect to the home page with an error message
            dd($e->getMessage());
            return redirect('user/account-sosmed')->with('error', $e->getMessage());
        }
    }


    public function tweet(Request $request)
    {
        $this->validate($request, [
            'status' => 'required|max:280',
        ]);

        // Retrieve token credentials from session or storage
        $tokenCredentials = session('twitter_oauth_token');

        $result = $this->twitterService->tweet($tokenCredentials, $request->input('status'));

        if ($result) {
            return redirect('/')->with('status', 'Tweet posted successfully!');
        }

        return redirect('/')->with('error', 'Failed to post tweet.');
    }

    public function fetchTweets()
    {
        // Retrieve token credentials from session or storage

        $account = Account::where('status', 'Active')->where('user_id', Auth::user()->id)->first();

        // dd($account);
        if(!$account){
            return redirect('user/account-sosmed')->with('error', 'Akun Twitter belum terhubung');
        }

        $tokenCredentials = $account->token_serialize_tweet;

        // dd(unserialize($tokenCredentials));

        $data = $this->twitterService->fetchTweets(unserialize($tokenCredentials));

        dd($data);
        // if ($tweets) {
        //     return view('tweets', ['tweets' => $tweets]);
        // }

        return view('user.kontensosmed.index', [
            'data' => $data
        ]);
    }



    // Rest of the controller methods
}
