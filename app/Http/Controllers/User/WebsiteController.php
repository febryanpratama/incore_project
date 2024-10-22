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
    public function index(){

        $message = [
            [
                "id" => 237,
                "conversationId" => 31,
                "response" => "Halo! Senang bisa berinteraksi dengan Anda hari ini. Saya di sini untuk membantu Anda merancang website sesuai dengan kebutuhan dan gaya yang Anda inginkan. Untuk memulai, saya ingin mengetahui beberapa detail tentang proyek website Anda.\n\n1. **Tujuan Website:** Apakah website ini untuk bisnis, pribadi, edukasi, atau tujuan lain?\n2. **Target Audiens:** Siapa yang menjadi target utama website ini? Hal ini akan membantu saya dalam menentukan desain dan fungsionalitas yang tepat.\n3. **Fitur Utama:** Fitur apa saja yang Anda inginkan di website? (misalnya, form kontak, galeri foto, blog, sistem reservasi, toko online)\n4. **Pengalaman Pengguna:** Bagaimana Anda ingin pengunjung merasa atau apa yang ingin mereka lakukan saat mengunjungi website Anda?\n5. **Style dan Estetika:** Adakah website yang Anda anggap sebagai referensi? Jenis estetika apa yang Anda inginkan (minimalis, modern, vintage, profesional)?\n\nSetelah saya mendapatkan informasi ini, saya akan dapat memberikan Anda beberapa ide dan draft desain yang sesuai dengan kebutuhan Anda. Saya sangat bersemangat untuk bekerja sama dengan Anda dalam menciptakan website yang bukan hanya menarik secara visual tapi juga fungsional.\n\nMohon bagi detailnya!",
                "createdAt" => "2024-10-17T15:19:02.939Z",
                "updatedAt" => "2024-10-17T15:19:02.939Z",
                "deletedAt" => null,
                "roleAi" => "assistant",
                "isUser" => false,
                "readeble" => true,
                "conversation" => [
                    "id" => 31,
                    "userId" => 2,
                    "uuid" => "f568947e-b71f-4d2c-a584-b5325a4416b8",
                    "createdAt" => "2024-10-17T15:18:48.995Z",
                    "updatedAt" => "2024-10-17T15:18:48.995Z",
                    "deletedAt" => null,
                    "isEndConversation" => false,
                    "type" => "bot"
                ]
                ],
                [
                    "id" => 237,
                    "conversationId" => 31,
                    "response" => "Halo! Senang bisa berinteraksi dengan Anda hari ini. Saya di sini untuk membantu Anda merancang website sesuai dengan kebutuhan dan gaya yang Anda inginkan. Untuk memulai, saya ingin mengetahui beberapa detail tentang proyek website Anda.\n\n1. **Tujuan Website:** Apakah website ini untuk bisnis, pribadi, edukasi, atau tujuan lain?\n2. **Target Audiens:** Siapa yang menjadi target utama website ini? Hal ini akan membantu saya dalam menentukan desain dan fungsionalitas yang tepat.\n3. **Fitur Utama:** Fitur apa saja yang Anda inginkan di website? (misalnya, form kontak, galeri foto, blog, sistem reservasi, toko online)\n4. **Pengalaman Pengguna:** Bagaimana Anda ingin pengunjung merasa atau apa yang ingin mereka lakukan saat mengunjungi website Anda?\n5. **Style dan Estetika:** Adakah website yang Anda anggap sebagai referensi? Jenis estetika apa yang Anda inginkan (minimalis, modern, vintage, profesional)?\n\nSetelah saya mendapatkan informasi ini, saya akan dapat memberikan Anda beberapa ide dan draft desain yang sesuai dengan kebutuhan Anda. Saya sangat bersemangat untuk bekerja sama dengan Anda dalam menciptakan website yang bukan hanya menarik secara visual tapi juga fungsional.\n\nMohon bagi detailnya!",
                    "createdAt" => "2024-10-17T15:19:02.939Z",
                    "updatedAt" => "2024-10-17T15:19:02.939Z",
                    "deletedAt" => null,
                    "roleAi" => "assistant",
                    "isUser" => false,
                    "readeble" => true,
                    "conversation" => [
                        "id" => 31,
                        "userId" => 2,
                        "uuid" => "f568947e-b71f-4d2c-a584-b5325a4416b8",
                        "createdAt" => "2024-10-17T15:18:48.995Z",
                        "updatedAt" => "2024-10-17T15:18:48.995Z",
                        "deletedAt" => null,
                        "isEndConversation" => false,
                        "type" => "bot"
                    ]
                ]
        ];

        $resp = $this->websiteUserService->getListConversationWebsite();

        $list = [];
        foreach($resp['data'] as $it){
            if(!$it['isUser']){
                $list[] = $it;
            }
        }

        $length = count($list);


        return view("user.website.index", [
            'data' => $resp ? $resp['data'] : [],
            'message' => $message,
            "length" => $length
        ]);
    }

    public function createSession(){
        $resp = $this->websiteUserService->getConversationWebsite();

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
