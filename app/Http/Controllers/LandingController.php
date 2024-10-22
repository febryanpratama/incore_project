<?php

namespace App\Http\Controllers;

use App\Services\DomainService;
use App\Services\RnaService;
use App\Services\TripayService;
use App\Template;
use App\Transaction;
use App\User;
use App\UserTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class LandingController extends Controller
{
    //

    protected $domainService;
    protected $tripayService;
    protected $rnaService;
    public function __construct(DomainService $domainService, TripayService $tripayService, RnaService $rnaService)
    {
        $this->domainService = $domainService;
        $this->tripayService = $tripayService;
        $this->rnaService = $rnaService;
    }

    public function searchDomain(Request $request){
        // dd($request->all());

        $response = $this->domainService->checkListDomain($request->all());

        if($response['status'] == false){

            // dd($response['message']);
            return redirect()->back()->with('error', $response['message']);
        }

        $template = Template::get();

        $responseTripay = $this->tripayService->getChannel();


        // dd($responseTripay['data']);
        
        return view('landing.domain', [
            'domain' => $response['data'] ?? null,
            'template' => $template,
            'payment' => $responseTripay['data']
        ]);
    }

    public function checkout(Request $request){
        // $template = Template::find($request->template_id);
        $respRna = $this->rnaService->getPrice($request->domain);

        
        // if($template['diskon'] != 0){
        //     $template['harga'] = $template['price'] - ($template['price'] * $template['diskon'] / 100);
        // }
            // dd($request->all(), $respRna);

        $data = [
            'nama' => $request->nama_lengkap,
            'email' => $request->email,
            'telpon' => $request->telpon,
            'total_amount' => $respRna['data'],
            'method' => $request->payment_method,
            'template_id' => 1,
            'order_items' => [
                [
                    'sku'         => 'TMP-RNADomain',
                    'name'        => 'Biaya Domain'.$request->domain,
                    'price'       => $respRna['data'],
                    'quantity'    => 1,
                    'product_url' => env('APP_URL'),
                    'image_url'   => env('APP_URL').'/product/nama-produk-1.jpg',
                ],
            ]
        ];

        $response = $this->tripayService->setTransaction($data);

        // dd($response);
        return redirect($response['checkout_url']);

    }
    
    public function test(){
        // $user = User::where('email', 'febryancpratama@gmail.com')->first();

        $data = [
            'email' => 'usefullairdrop@gmail.com',
        ];

        // $user->assignRole('user');

        $resp = \Mail::to($data['email'])->send(new \App\Mail\UserTransaction($data));

        dd($resp);
    }

    public function callback(Request $request)
    {
        try {
            $callbackSignature = $request->server('HTTP_X_CALLBACK_SIGNATURE');
            $json = $request->getContent();
            $signature = hash_hmac('sha256', $json, env('TRIPAY_PRIVATE_KEY'));
    
            // if ($signature !== (string) $callbackSignature) {
            //     return Response::json([
            //         'success' => false,
            //         'message' => 'Invalid signature',
            //     ]);
            // }
    
            // if ('payment_status' !== (string) $request->server('HTTP_X_CALLBACK_EVENT')) {
            //     return Response::json([
            //         'success' => false,
            //         'message' => 'Unrecognized callback event, no action was taken',
            //     ]);
            // }
    
            $data = json_decode($json);
            // dd($data);
    
            if (JSON_ERROR_NONE !== json_last_error()) {
                return Response::json([
                    'success' => false,
                    'message' => 'Invalid data sent by tripay',
                ]);
            }
    
            $invoiceId = $data->merchant_ref;
            $tripayReference = $data->reference;
            $status = strtoupper((string) $data->status);
    
            if ($data->is_closed_payment === 1) {
                $invoice = Transaction::where('merchant_ref', $invoiceId)
                    ->where('reference', $tripayReference)
                    ->where('status', '=', 'UNPAID')
                    ->first();
    
                if (! $invoice) {
                    return Response::json([
                        'success' => false,
                        'message' => 'No invoice found or already paid: ' . $invoiceId,
                    ]);
                }
    
                switch ($status) {
                    case 'PAID':
                        $invoice->update(['status' => 'PAID']);
                        break;
    
                    case 'EXPIRED':
                        $invoice->update(['status' => 'EXPIRED']);
                        break;
    
                    case 'FAILED':
                        $invoice->update(['status' => 'FAILED']);
                        break;
    
                    default:
                        return Response::json([
                            'success' => false,
                            'message' => 'Unrecognized payment status',
                        ]);
                }
    
                $user = User::create([
                    'name' => $invoice->customer_name,
                    'email' => $invoice->customer_email,
                    'password' => Hash::make('password123'),
                ]);
    
    
                $data = [
                    'email' => $invoice->customer_email,
                ];
                
                $update = UserTemplate::where('reference', $tripayReference)->update(['user_id' => $user->id]);
    
                $user->assignRole('user');
    
                $resp = \Mail::to($data['email'])->send(new \App\Mail\UserTransaction($data));
    
                // Sync UserTemplate
    
                return Response::json(['success' => true]);
            }
            //code...
        } catch (\Throwable $th) {
            //throw $th;

            dd($th->getMessage());
        }
    }
}
