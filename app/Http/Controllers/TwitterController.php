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
            'token' => $user->token,
            'tokenSecret' => $user->tokenSecret,
            'id' => $user->id,
            'nickname' => $user->nickname,
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'avatar_original' => $user->avatar_original,
        ];

        // dd($json);
        
        dd($json,$user,$user->token, $user->tokenSecret);
        // $user->token
        // $user->tokenSecret

        // Handle the authenticated user data
        // For example, create or update the user in the database

        return redirect()->route('home'); // Redirect to the desired route
    }
}