<?php

namespace App\Services;

use App\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class InstagramService {

    public function getFeed(){

        $account = Account::where('user_id', Auth::user()->id)
            ->where('app', 'Instagram')
            ->where('status', 'Active')
            ->first();        

        $getToken = json_decode($account->data);
        $response = Http::get('https://graph.instagram.com/me/media', [
            'fields' => 'id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username',
            'access_token' => $getToken->user->token,
        ]);

        if ($response->successful()) {
            dd($response->json()['data']);
            return $response->json()['data'];
        }

        return [];
    }
}