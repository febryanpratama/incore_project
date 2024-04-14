<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\NavigationTemplate;
use App\NavigationValue;
use App\UserTemplate;
use Illuminate\Http\Request;

class GetTemplateController extends Controller
{
    //

    public function navigation($store_slug, $navigation_slug){

        // dd($store_slug);
        $checkStoreSlug = UserTemplate::where('unique_store', $store_slug)->first();

        if(!$checkStoreSlug){
            return redirect('/');
        }

        // $checkNavigationSlug = NavigationValue::with(['navigationtemplate' => function($q) use ($navigation_slug){
        //     $q->where('slug', $navigation_slug);
        // }])->get();

        $checkNavigationSlug = NavigationTemplate::with('navigationvalue', 'navigationvalue.card')->where('slug', $navigation_slug)->first();

        // dd($checkNavigationSlug);

        $explode = explode('.blade.php', $checkNavigationSlug->file_html);

        // dd($explode);
        $view = 'asset.'.$explode[0];
        // dd($view);
        return view($view, [
            'store_slug' => $store_slug,
            'data' => $checkNavigationSlug
        ]);
    }
}
