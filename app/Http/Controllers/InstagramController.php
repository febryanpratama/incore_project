<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $instagramUser = [
            'id' => $user->getId(),
            'nickname' => $user->getNickname(),
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'avatar' => $user->getAvatar(),
        ];

        dd($instagramUser);

        // TODO: Handle the authenticated user, e.g., save to database or session
        // return redirect()->route('home')->with('instagramUser', $instagramUser);
    }
}