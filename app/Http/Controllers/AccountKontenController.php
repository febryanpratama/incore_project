<?php

namespace App\Http\Controllers;

use App\AccountKonten;
use Illuminate\Http\Request;
use App\Account;
use App\FieldsInstagram;
use App\Konten;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

// Twitter
use Atymic\Twitter\Twitter as TwitterContract;
use Illuminate\Http\JsonResponse;
use Twitter;

class AccountKontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Initialize
        $data = Konten::with('accountKontens')->latest()->paginate(20);

        return view('pages.konten.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Initialize
        $accounts = Account::get();

        return view('pages.konten.create', ['accounts' => $accounts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'caption' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->first())->withInput();
        }
        
        try {
            // Memulai transaksi
            DB::beginTransaction();
            
            // Get Account
            $user = Account::where('id', $request->list)->first();

            if (!$user) {
                return back()->withErrors('Pengguna yang dipilih tidak ditemukan.')->withInput();
            }

            // Initialize
            $name = null;
            $paths = [];
            if($request->file('files')!=null || $request->file('files')!='') {
                $fileData = request()->file('files');
                foreach ($fileData as $file) {
                    // Upload
                    $extension = $file->getClientOriginalExtension();
                    $path = env('APP_URL') . '/storage/' . $file->store('uploads/content', 'public');
                    // $name = $file->getClientOriginalName();
                    $name = date("Y-m-d H:i:s").".".$extension;
    
                    array_push($paths, [
                        'path' => $path,
                        'extension' => $extension
                    ]);
                }
            }

            // Create Content
            $content = Konten::create([
                'caption' => $request->caption,
                'app' => $user->app,
                'status_posting' => 'Menunggu',
                'status_post' => $request->schedule,
                'image' => $name,
                'date_jadwal' => ($request->schedule == 'Terjadwal') ? $request->tanggal . " " . $request->waktu : null,
                'post_type' => ($request->post_type) ? $request->post_type : 1
            ]);

            // Create Content Media
            AccountKonten::create([
                'account_id' => $user->id,
                'konten_id' => $content->id,
                'path' => $paths
            ]);
            
            DB::commit();
            $jadwal = "";
            if($request->schedule== 'Instan'){
                $jadwal = 1;
            } else {
                $jadwal = 2;
            }
            $data = array(
                'caption' => $request->caption,
                'sosmed_type' => $request->sosmed_type,
                'account_id' => $user->id,
                'post_type' => ($request->post_type) ? $request->post_type : 1,
                'media' => $paths,
                'date_type' => $jadwal,
                'date' => $jadwal == 1 ? null : null
            );
            $url = 'https://digimar.indonesiacore.com/api/content/store-content';

            $header = [
                'Content-Type' => 'application/x-www-form-urlencoded'
            ];

        // Convert the data array to a JSON string
        $jsonData = json_encode($data);

        // Initialize cURL
        $ch = curl_init();

        // Set the cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData),
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvZGlnaW1hci5pbmRvbmVzaWFjb3JlLmNvbVwvYXBpXC9hdXRoXC9zaWduaW4iLCJpYXQiOjE3MzMzOTM0NTAsImV4cCI6MjA0ODc1MzQ1MCwibmJmIjoxNzMzMzkzNDUwLCJqdGkiOiJ3VVBCOFhrNkhqMDVlcDVaIiwic3ViIjoxLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.QiJ83lhCruR9LjZ-TysWF7Jb0BHB1hH0PVs4V20NetI'
        ]);
        
        // Timeout and SSL verification settings
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);  // 30 seconds timeout
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Verify SSL certificates
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);  // Check the SSL certificate host
        print_r($data);
        // Execute the cURL request
        $result = curl_exec($ch);

        // Check for cURL errors
        // dd($result);
        if ($result === false) {
            throw new \Exception('cURL Error: ' . curl_error($ch));
        }

      
        // Decode the response from JSON
        $resData = json_decode($result, true);
        // dd($resData);
        // dd($resData['data']['id']);

        $Konten = Konten::where('id', $content->id)->first();
        $Konten->update([
            'id_konten_digimar' => $resData['data']['id']
        ]);

    
        } catch (Exception $e) {
            DB::rollBack();

            return response()->json(['error' => $e->getMessage()], 500);
        }

        // if ($implode == 'instagram') {
        //     // $this->postToInstagram($user->token, url('images/' . $image_name), $request->caption);
        // } else if ($implode == 'twitter') {
        //     // $this->postToTwitter($request->access_token, $request->caption);
        // }

        return redirect()->route('konten.index')->withSuccess('Berhasil menambahkan data.');
    }

    public function postContent(Request $request)
    {
        // Check Data
        $content = Konten::with('accountKontens', 'accountKontens.account')
            ->where('id', $request->id)
            ->first();

        if (!$content) {
            return response()->json([
                'status' => false,
                'message' => 'Data konten tidak ditemukan.'
            ], 404);
        }

        if ($content->app == 'Instagram') {
            /*
                Docs : https://developers.facebook.com/docs/instagram-platform/instagram-api-with-instagram-login/content-publishing
            */

            // Check Type
            if ($content->post_type == 1) { // Single
                foreach ($content->accountKontens as $account) {
                    // Initialize
                    $instagramId = $account->account->fieldsInstagram->instagram_id;
                    $token = $account->account->token;
                    $path = $account->path[0]['path'];
                    $body = [
                        'image_url' => $path,
                        'access_token' => $token,
                        'caption' => $content->caption
                    ];

                    $container = $this->createContainer($instagramId, $body);

                    if ($container['status']) {
                        // Initialize
                        $body = [
                            'creation_id' => $container['data']['id'],
                            'access_token' => $token
                        ];

                        $data = $this->postInstagram($instagramId, $body);

                        if ($data['status']) {
                            // Update Data
                            $content->update([
                                'status_posting' => 'Berhasil'
                            ]);

                            return response()->json([
                                'status' => true,
                                'message' => 'Koten berhasil dipublish.'
                            ], 200);
                        } else {
                            return response()->json([
                                'status' => false,
                                'message' => 'Gagal melakukan Publish.'
                            ], 200);
                        }
                    } else {
                        if (!$container['status']) {
                            return response()->json([
                                'status' => false,
                                'message' => 'Gagal membuat Kontainer.'
                            ], 200);
                        }
                    }
                }
            } elseif ($content->post_type == 2) { // Carousel
                // Initialize
                $accounts = $content->accountKontens;
                $containerId = [];

                foreach ($accounts as $account) {
                    // Token
                    $token = $account->account->token;
                    $instagramId = $account->account->fieldsInstagram->instagram_id;

                    foreach ($account->path as $path) {
                        if ($path['extension'] == 'jpeg' || $path['extension'] == 'jpg') {
                            // Create Container
                            $body = [
                                'image_url' => $path['path'],
                                'is_carousel_item' => true,
                                'access_token' => $token
                            ];
                        } else {
                            // Create Container
                            $body = [
                                'media_type' => 'VIDEO',
                                'video_url' => $path['path'],
                                'is_carousel_item' => true,
                                'access_token' => $token
                            ];
                        }

                        $container = $this->createContainer($instagramId, $body);

                        if ($container['status']) {
                            array_push($containerId, $container['data']['id']);
                        } else {
                            return response()->json([
                                'status' => false,
                                'message' => 'Gagal membuat kontainer.',
                                'error' => $container['data']
                            ], 400);
                        }
                    }

                    // Create Container Carousel
                    $body = [
                        'caption' => $content->caption,
                        'media_type' => 'CAROUSEL',
                        'children' => implode(',', $containerId),
                        'access_token' => $token
                    ];

                    $containerCarousel = $this->createContainer($instagramId, $body);

                    if ($containerCarousel['status']) {
                        // Initialize
                        $body = [
                            'creation_id' => $containerCarousel['data']['id'],
                            'access_token' => $token
                        ];

                        $data = $this->postInstagram($instagramId, $body);

                        if ($data['status']) {
                            // Update Data
                            $content->update([
                                'status_posting' => 'Berhasil'
                            ]);

                            return response()->json([
                                'status' => true,
                                'message' => 'Koten berhasil dipublish.'
                            ], 200);
                        } else {
                            return response()->json([
                                'status' => false,
                                'message' => 'Gagal melakukan Publish.'
                            ], 200);
                        }
                    }
                }
            } else { // Reels
                foreach ($content->accountKontens as $account) {
                    // Token
                    $token = $account->account->token;
                    $instagramId = $account->account->fieldsInstagram->instagram_id;

                    // Check Profile
                    // $response = Http::get("https://graph.instagram.com/v21.0/me?fields=id,user_id,username&access_token=".$token);

                    // Initialize
                    $tokenNew = "EAAhXLm9eNYwBO2nLL1B9drrhy9ACZCIVGkOZBkwRGlFfJgwzuneorGYeoYx05hPOEoDcxipoYFCzzpjZAUTYesJTZA32KOaZCqEu5XI2Wr8ayOGJt3Ez9YS97sxdsTKdoZBshZBd2cDiEB6fJsCklnWnMZCV5durH1wSpB6Oqya8ZCN7NU0MZCCekpdyvjxzNPmCOsISLOxWnnRELitbBSwfZBEr53b";

                    $response = Http::post('https://graph.facebook.com/v21.0/104733791180979/video_reels', [
                        'upload_phase' => 'start',
                        'access_token' => $token
                    ]);

                    dd($response->json());
                }
            }

            return response()->json([
                'status' => false,
                'message' => 'Konten gagal dipublish.'
            ], 400);
        }

        return response()->json([
            'status' => false,
            'message' => 'Dalam Pengembangan.'
        ], 200);
    }

    private function createContainer($instagramId, $body)
    {
        // Initialize
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post('https://graph.instagram.com/v20.0/' . $instagramId . '/media', $body);

        // Response dari Instagram API
        $results = $response->json();

        if ($response->successful()) {
            return [
                'status' => true,
                'message' => 'Berhasil membuat data kontainer.',
                'data' => $results
            ];
        } else {
            return [
                'status' => false,
                'message' => 'Gagal membuat data kontainer.',
                'data' => $response->json()
            ];
        }
    }

    private function postInstagram($instagramId, $body)
    {
        // Initialize
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post('https://graph.instagram.com/v20.0/' . $instagramId . '/media_publish', $body);

        // Response dari Instagram API
        $results = $response->json();

        if ($response->successful()) {
            return [
                'status' => true,
                'message' => 'Berhasil membuat data posting.',
                'data' => $results
            ];
        } else {
            return [
                'status' => false,
                'message' => 'Gagal membuat data posting.'
            ];
        }
    }

    public function postTwitter(): JsonResponse
    {
        // $response = Twitter::getUserTimeline(['count' => 20, 'response_format' => 'array']);

        // return Twitter::postTweet(['status' => 'Laravel is beautiful', 'response_format' => 'json']);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('TWITTER_BEARER_TOKEN'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->get("https://api.x.com/2/tweets?ids=1748357910214868992");

        if ($response->successful()) {
            // Berhasil mendapatkan respons
            $profileData = $response->json();

            return response()->json([
                'status' => 'success',
                'data' => $profileData,
            ]);
        } else {
            // Error handling jika gagal
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch profile data.',
                'error_details' => $response->body(),
            ], $response->status());
        }

        dd($response);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('TWITTER_BEARER_TOKEN'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->get("https://api.x.com/2/tweets");

        if ($response->successful()) {
            // Response was successful, handle the data
            $data = $response->json();

            dd($data);
        } else {
            // Handle error, if any
            $error = $response->body();

            dd($error);
        }

        dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AccountKonten  $accountKonten
     * @return \Illuminate\Http\Response
     */
    public function show(AccountKonten $accountKonten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccountKonten  $accountKonten
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Initialize
        $data["data"]= Konten::with('accountKontens')->where('id', $id)->first();

        return view('pages.konten.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AccountKonten  $accountKonten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'caption' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $Konten = Konten::with('accountKontens')->where('id', $id)->first();
        $id_kontent_digimar = $Konten->id_konten_digimar;
        // dd($id_kontent_digimar);
        // dd($Konten);
        $Konten->update([
            'caption' => $request->caption
        ]);

        $data = array(
            'caption' => $request->caption
        );
        $url = 'https://digimar.indonesiacore.com/api/content/update-content/'.$id_kontent_digimar;
        // dd($url);

        $header = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Accept' => 'application/json'
        ];

        // Convert the data array to a JSON string
        $jsonData = json_encode($data);

        // Initialize cURL
        $ch = curl_init();

        // Set the cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData),
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvZGlnaW1hci5pbmRvbmVzaWFjb3JlLmNvbVwvYXBpXC9hdXRoXC9zaWduaW4iLCJpYXQiOjE3MzMzOTM0NTAsImV4cCI6MjA0ODc1MzQ1MCwibmJmIjoxNzMzMzkzNDUwLCJqdGkiOiJ3VVBCOFhrNkhqMDVlcDVaIiwic3ViIjoxLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.QiJ83lhCruR9LjZ-TysWF7Jb0BHB1hH0PVs4V20NetI'
        ]);
        
        // Timeout and SSL verification settings
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);  // 30 seconds timeout
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Verify SSL certificates
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);  // Check the SSL certificate host
        print_r($data);
        // Execute the cURL request
        $result = curl_exec($ch);

        // Check for cURL errors
        if ($result === false) {
            throw new \Exception('cURL Error: ' . curl_error($ch));
        }

        // Decode the response from JSON
        $resData = json_decode($result, true);
        // dd($resData);
        return redirect()->route('konten.index')->withSuccess('Berhasil mengubah data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AccountKonten  $accountKonten
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Check data
        $data = Konten::with('accountKontens')->where('id', $id)->first();
        $id_kontent_digimar = $data->id_konten_digimar;

        if (!$data) {
            return response()->json([
                'status'    => false,
                'message'   => 'Data tidak ditemukan'
            ], 404);
        }

        if($data->image != null) {

            foreach ($data->accountKontens as $item) {
                $media = $item->path;

                foreach ($media as $path) {
                    // Explorde
                    $url = explode('/', $path['path']);

                    @unlink('storage/uploads/content/'. $url['6']);
                }
            }
        }
        $data->delete();
        $accountKonten = AccountKonten::where('konten_id', $id)->delete();

        $url = 'https://digimar.indonesiacore.com/api/content/delete-content/' . $id_kontent_digimar;
        // Initialize cURL
        $ch = curl_init();

        // Set the cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE'); // Specify DELETE request method
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvZGlnaW1hci5pbmRvbmVzaWFjb3JlLmNvbVwvYXBpXC9hdXRoXC9zaWduaW4iLCJpYXQiOjE3MzMzOTM0NTAsImV4cCI6MjA0ODc1MzQ1MCwibmJmIjoxNzMzMzkzNDUwLCJqdGkiOiJ3VVBCOFhrNkhqMDVlcDVaIiwic3ViIjoxLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.QiJ83lhCruR9LjZ-TysWF7Jb0BHB1hH0PVs4V20NetI' // Replace with your valid token
        ]);

        // Optional: Set timeout and SSL verification settings
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); // Timeout in seconds
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification (not recommended for production)
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); // Ensure SSL certificate is valid

        // Execute the cURL request
        $result = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            echo 'cURL Error: ' . curl_error($ch);
        } else {
            // Decode the response and print it
            $response = json_decode($result, true);
            // print_r($response);
        }

        // Close the cURL session
        curl_close($ch);
        return redirect()->route('konten.index')->withSuccess('Berhasil menghapus data.');
    }
}
