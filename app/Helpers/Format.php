<?php

namespace App\Helpers;

use App\generateWebsite;
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


    public static function checkContainsString($string)
    {
        // Jika string berubah setelah strip_tags, artinya ada HTML tags di dalamnya
        if ($string != strip_tags($string)) {
            return true; // Mengandung HTML tags
        } else {
            return false; // Tidak mengandung HTML tags
        }
    }


    public static function generateHtml($string)
{
    $codeRegex = '/```html([\s\S]*?)```/';
    preg_match($codeRegex, $string, $match);

    if (isset($match[1])) {
        // Ambil bagian kode HTML yang ditemukan
        $extractedCode = trim($match[1]);

        // Tentukan nama file dan path untuk menyimpan HTML
        $fileName = auth()->user()->id."-".time().'.html'; // Anda bisa menambahkan timestamp atau ID jika perlu
        $filePath = public_path('generate/' . $fileName); // Menggunakan public_path untuk menyimpan di folder public

        // Tulis kode HTML ke file
        file_put_contents($filePath, $extractedCode);

        // Mengembalikan respons sukses atau lokasi file yang disimpan
        generateWebsite::create([
            'user_id' => Auth::user()->id,
            'path_file' => 'generate/'.$fileName
        ]);
        
        return response()->json([
            'message' => 'File berhasil disimpan.',
            'file_path' => url('generate/' . $fileName) // Mengembalikan URL untuk mengakses file di folder generate
        ]);
    } else {
        return response()->json(['message' => 'Tidak ditemukan blok kode HTML.'], 400);
    }
}
}