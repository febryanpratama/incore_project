<?php

namespace App\Http\Controllers;
use App\Account;
use App\Konten;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $data = Account::latest()->orderBy('id', 'DESC')->get();

        return view('pages.account.index', [
            'data'=> $data
        ]);
    }

    public function store(Request $request){
        Account::create([
            'token'=>$request->token,
            'app'=>$request->app,
            'nama_sosmed' => $request->nama_sosmed
        ]);

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function destroy(Request $request, $id)
    {
        // Check Data
        $data = Account::where('id', $id)->first();

        if (!$data) {
            return response()->json([
                'status'    => false,
                'message'   => 'Data tidak ditemukan.'
            ], 404);
        }

        // Delete Content
        $content = Konten::with('accountKontens')
            ->whereHas('accountKontens', function ($q) use ($data) {
                $q->where('account_id', $data->id);
            })
            ->delete();

        $data->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Berhasil menghapus data.'
        ], 200);
    }
}
