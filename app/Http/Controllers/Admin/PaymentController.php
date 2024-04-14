<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //

    public function index(){
        $transaction = Transaction::get();
        return view('admin.payment.index',[
            'transaction' => $transaction
        ]);
    }
}
