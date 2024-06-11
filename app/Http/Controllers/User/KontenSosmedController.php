<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Konten;
use App\Services\InstagramService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KontenSosmedController extends Controller
{
    //
    protected $instagramService; 
    public function __construct(InstagramService $instagramService)
    {
        $this->instagramService = $instagramService;
    }

    public function index(){

        $responseInstagram = $this->instagramService->getFeed();

        // dd($responseInstagram);

        // dd(count($responseInstagram));

        $ListData = [];

        for($i = 0; $i < count($responseInstagram); $i++){

            $ListData[] = [
                'id' => $responseInstagram[$i]['id'],
                'caption' => $responseInstagram[$i]['caption'] ?? 'Tidak Ada Caption',
                'image' => $responseInstagram[$i]['media_url'],
                'app' => 'Instagram',
                'url' => $responseInstagram[$i]['permalink'],
                'date_jadwal' => $responseInstagram[$i]['timestamp'],
                'status_post' => 'Terjadwal',
                'status_posting' => 'Menunggu'
            ];
        }

        // dd(collect($ListData));

        // $data = Konten::get();

        return view('user.kontensosmed.index', [
            'data' => collect($ListData)
        ]);
    }


    public function store(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'caption' => 'required',
            'foto' => 'required',
            'list' => 'required',
        ]);

        if($validator->fails()){
            // dd($validator->errors()->first());
            return back()->withErrors($validator->errors()->first());
        }

        if($request->foto){
            $image = $request->file('foto');
            $image_name = time().".".$image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }

        $implode = implode(',', $request->list);

        if($request->tanggal && $request->waktu){
            $date_jadwal = $request->tanggal." ".$request->waktu;
        }else{
            $date_jadwal = null;
        
        }

        Konten::create([
            'caption' => $request->caption,
            'image' => $image_name,
            'app' => $implode,
            'url' => null,
            'date_jadwal' => $date_jadwal ?? null,
            'status_post' => $date_jadwal != null ? 'Terjadwal' : 'Instan',
            'status_posting' => $date_jadwal != null ? 'Menunggu' : 'Berhasil'
        ]);


        return back()->withSuccess('Data berhasil ditambahkan');
    }

    // private function getInstagramToken(){
    //     $account = Account::where('user_id', Auth::user()->id)
    //         ->where('app', 'Instagram')
    //         ->where('status', 'Active')
    //         ->first();        

    //     $getToken = json_decode($account->data);

    //     return $getToken->user->token;
    // }
}
