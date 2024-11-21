<?php

namespace App\Http\Controllers\User;

use App\ConversationWebsite;
use App\Http\Controllers\Controller;
use App\Services\WebsiteUserService;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    protected $websiteUserService;

    public function __construct(WebsiteUserService $websiteUserService)
    {
        $this->websiteUserService = $websiteUserService;
    }
    public function index()
    {
        $resp = $this->websiteUserService->getListConversationWebsite();
        
        $list = [];

        // if ($resp["status"]) {
        //     foreach ($resp['data'] as &$it) {
        //         if (!$it['isUser']) {
        //             // Menyaring pesan dari asisten, bukan pengguna
        //             $list[] = $it;

        //             // Parsing blok kode HTML pada respons
        //             $it['response'] = preg_replace_callback(
        //                 '/```html(.*?)```/s',
        //                 function ($matches) {
        //                     // Menggunakan htmlspecialchars untuk menghindari eksekusi HTML dalam tampilan
        //                     return '<pre><code class="html hljs">' . htmlspecialchars(trim($matches[1])) . '</code></pre>';
        //                 },
        //                 $it['response']
        //             );
        //         }
        //     }
        // }
        if ($resp["status"]) {
            foreach ($resp['data'] as &$it) {
                if (!$it['isUser']) {
                    // Menyaring pesan dari asisten, bukan pengguna
                    $list[] = $it;

                    // Parsing blok kode HTML pada respons
                    $it['response'] = preg_replace_callback(
                        '/```html(.*?)```/s',
                        function ($matches) {
                            $htmlContent = htmlspecialchars(trim($matches[1]));
                            return '
                                <div class="html-code-block">
                                    <pre><code class="html hljs">' . $htmlContent . '</code></pre>
                                    <button class="btn btn-primary preview-btn mt-2" data-html="' . htmlentities($matches[1]) . '">Preview</button>
                                    <button class="btn btn-secondary download-btn mt-2" data-html="' . htmlentities($matches[1]) . '">Download</button>
                                </div>';
                        },
                        $it['response']
                    );
                }
            }
        }

        $length = count($list);

        return view("user.website.index", [
            'data' => $resp["status"] ? $resp['data'] : [],
            'length' => $length
        ]);
    }

    public function createSession(){
        $resp = $this->websiteUserService->getConversationWebsite();

        // dd($resp);
        if(!$resp){
            return response()->json([
                "status" => true,
                "message" => "Failed to create session"
            ]);
        }


        return response()->json([
            "status" => true,
            "message" => "Success",
            "data" => $resp['data']
        ]);
    }

    public function sendMessage(Request $request){
        // dd($request->all());

        $resp = $this->websiteUserService->sendMessage($request->all());

        if(!$resp){
            return response()->json([
                "status" => true,
                "message" => "Failed to send message"
            ]);
        }

        return response()->json([
            "status" => true,
            "message" => "Success",
            "data" => $resp['data'],
        ]);
    }
}
