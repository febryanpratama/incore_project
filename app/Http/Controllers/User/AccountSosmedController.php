<?php

namespace App\Http\Controllers\User;

use App\Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountSosmedController extends Controller
{
    //

    public function index(){
        $data = Account::get();

        return view('user.accountsosmed.index', [
            'data' => $data
        ]);
    }
}
