<?php

namespace App\Http\Controllers\User;

use App\Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountSosmedController extends Controller
{
    //

    public function index(){
        $data = Account::where('user_id', Auth::user()->id)->get();

        return view('user.accountsosmed.index', [
            'data' => $data
        ]);
    }
}
