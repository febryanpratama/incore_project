<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;

// use Laravel\Socialite\Facades\Socialite;

class InstagramController extends Controller
{
    /**
     * Redirect the user to the Instagram authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('instagram')->redirect();
    }

    /**
     * Obtain the user information from Instagram.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('instagram')->user();

        // You can access user information like this:
        // $instagramUser = [
        //     'id' => $user->getId(),
        //     'nickname' => $user->getNickname(),
        //     'name' => $user->getName(),
        //     'email' => $user->getEmail(),
        //     'avatar' => $user->getAvatar(),
        //     'token' => $user->token,
        // ];

        // dd($instagramUser);

        $data = [
            'user' => [
                "uid" => $user->getId(),
                "nickname" => $user->getNickname( ),
                "name" =>  $user->getName(),
                "firstName" => null,
                "lastName" => null,
                "email" => null,
                "location" => "",
                "description" => null,
                "imageUrl" => $user->getAvatar(),
                "token" => $user->token,
            ]
        ];

        $account = Account::create([
            'user_id' => Auth::user()->id,
            'nama_sosmed' => 'instagram oauth',
            'token' => $user->token,
            'data' => json_encode($data),
            'status' => 'Active',
            'app' => "Instagram",
            'token_serialize_tweet' => null,
            'temp_credentials' => null,
        ]);

        // TODO: Handle the authenticated user, e.g., save to database or session

        return redirect('user/account-sosmed')->withSuccess("Success connect to Instagram");
    }

    protected function fetchInstagramFeed($accessToken)
    {
        $account = Account::where('user_id', Auth::user()->id)
            ->where('app', 'Instagram')
            ->where('status', 'Active')
            ->first();        

        $getToken = json_decode($account->data);
        $response = Http::get('https://graph.instagram.com/me/media', [
            'fields' => 'id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username',
            'access_token' => $accessToken,
        ]);

        if ($response->successful()) {
            dd($response->json()['data']);
            return $response->json()['data'];
        }

        return [];
    }
}