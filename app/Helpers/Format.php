<?php

namespace App\Helpers;

use App\NavigationTemplate;
use App\NavigationValue;
use App\UserTemplate;
use Illuminate\Support\Facades\Auth;

class Format {
    static function getParam($name_tag, $navigation_id){

        $cek = NavigationValue::where('navigation_id', $navigation_id)->where('nama_section', $name_tag)->where('user_id', Auth::user()->id)->first();

        if($cek){
            return $cek->value;
        }else{
            return "NULL";
        }
    }

    static function getNavigation($store_slug){
        $check = UserTemplate::where('unique_store', $store_slug)->first();

        if(!$check){
            return redirect('/');
        }

        $nav = NavigationTemplate::where('template_id', $check->template_id)->get();

        return $nav;
    }
}