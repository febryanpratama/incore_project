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
use Laravel\Socialite\Facades\Socialite;

class TwitterController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('twitter')->user();

        // dd($user);

        $json = [
            'user' => [
                'uid' => $user->id,
                'nickname' => $user->nickname,
                'name' => $user->name,
                'email' => $user->email,
                'imageUrl' => $user->avatar_original,
            ],
            'token' => $user->token,
            'tokenSecret' => $user->tokenSecret,
        ];

        $account = Account::create([
            'user_id' => Auth::user()->id,
            'nama_sosmed' => 'twitter '.$user->name,
            'token' => $user->token,
            'app' => 'Twitter',
            'temp_credentials' => null,
            'status' => 'Active',
            'token_serialize_tweet' => null,
            'data' => json_encode($json),
        ]);

        return redirect('user/account-sosmed')->withSuccess('Twitter Account Connected');

        // dd($json);
        
        // dd($json,$user,$user->token, $user->tokenSecret);
        // $user->token
        // $user->tokenSecret

        // Handle the authenticated user data
        // For example, create or update the user in the database

        // return redirect()->route('home'); // Redirect to the desired route
    }
}