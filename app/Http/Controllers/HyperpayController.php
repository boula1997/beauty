<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderproduct;
use App\Models\Transaction;
use App\Models\User;
use App\Traits\FCMNotification;
use App\Traits\HandlesOrders;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HyperpayController extends Controller
{

    use HandlesOrders;
    use FCMNotification;

    protected $type = "test";
    protected $url;
    protected $token;
    protected $entity_id;
    protected $mada_entity_id;
    protected $order;
    protected $orderproduct;

    public function __construct(Order $order, Orderproduct $orderproduct)
    {
        $this->url = 'https://eu-test.oppwa.com';

        $this->token = 'OGFjN2E0Yzc5NTA0MTAxMDAxOTUwZGM3NmUzMzA1ZDl8VERCOFNjWiNQI0p5TmRTeGZwd0w=';

        $this->entity_id = '8ac7a4c79504101001950dc81b9305dd';

        $this->mada_entity_id = '8ac7a4c79504101001950e1e13f305ff';

        $this->order = $order;

        $this->orderproduct = $orderproduct;
    }


    public function paymentCallback($status, $lang, $platform, $order_id = null)
    {
        if ($status == 'success') {
            $status = "done";
        } else {
            $status = "fail";
        }
        if ($platform == 'website') {
            session()->flash('payment_redirect', true);
            if (request()->get('order_id')) {
                return redirect()->route('showOneOrder', request()->get('order_id'))->withHeaders([
                    'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
                    'Pragma' => 'no-cache',
                    'Expires' => 'Fri, 01 Jan 1990 00:00:00 GMT'
                ])->with('success', trans('general.created_successfully'));
            } else {
                return redirect()->route('front.checkout')->withHeaders([
                    'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
                    'Pragma' => 'no-cache',
                    'Expires' => 'Fri, 01 Jan 1990 00:00:00 GMT'
                ])->with('error', trans('general.something_wrong'));
            }
        }
        return view('payment.order_callback', compact(['status', 'lang', 'platform']));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|string
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function order(Request $request)
    {
        $payment_name = request()->get('payment_name');
        $address_id = request()->get('address_id');
        $userId = request()->get('user_id');
        $lang = request()->get('lang');
        $platform = request()->get('platform');
        $isWallet = request()->get('is_wallet')??false;
        if($isWallet){
            $user = User::where('id', $userId)->first();
            if (!$user) {
                return response()->json(['errors' => ['message' => __('general.something_wrong')]], 404);
            }
            $amount = number_format((float)request()->get('amount'), 2, '.', '');
        }else{
            $user = User::where('id', $userId)->first();
            if (!$user || ($user && !$user->cart)) {
                return response()->json(['errors' => ['message' => __('general.something_wrong')]], 404);
            }
            cart()->clearItems();
            loadUserCart($userId);
            $amount = number_format((float)cart()->getTotal(), 2, '.', '');
        }

        $form_url = $this->url;
        $url = $form_url . "/v1/checkouts";

        $code = $userId . $amount . now()->format('YmdHis') . rand(1000, 100000);

        $data = "entityId=" . $this->entity_id .
            "&amount=" . $amount .
            "&currency=SAR" .
            "&merchantTransactionId=" . $code .
            "&paymentType=DB";

        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization:Bearer ' . $this->token
            ));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, ($this->type == "test") ? false : true); // this should be set to true in production
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $responseData = curl_exec($ch);
            if (curl_errno($ch)) {
                return curl_error($ch);
            }
            curl_close($ch);
            $result = json_decode($responseData, true);

            $checkoutId = $result['id'];
            if($isWallet){
                return view('payment.wallet', compact('checkoutId', 'userId', 'form_url', 'payment_name', 'lang', 'platform', 'amount'));
            }else{
                return view('payment.order', compact('checkoutId', 'userId', 'form_url', 'payment_name', 'lang', 'platform', 'address_id'));
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function order_callback(Request $request, $user_id, $lang, $platform, $payment_name, $address_id)
    {
        $checkoutId = request()->get('id');
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . $this->token])
            ->get($this->url . '/v1/checkouts/' . $checkoutId . '/payment', array('entityId' => $this->entity_id));
        $response = $response->json();
        $resultCode = $response["result"]["code"];
        $successResult1 = '/^(000\.000\.|000\.100\.1|000\.[36])/';
        $successResult2 = '/^(000\.400\.0[^3]|000\.400\.100)/';
        if (preg_match($successResult1, $resultCode) || preg_match($successResult2, $resultCode)) {
            $user = User::where('id', $user_id)->first();
            cart()->clearItems();
            loadUserCart($user_id);
            $data['total'] = cart()->getTotal();
            $data['payment_method'] = 'digital_payment';
            $data['payment_name'] = $payment_name;
            $data['address_id'] = $address_id;
            $data['user_id'] = $user_id;
            $data['pending_at'] = Carbon::now();
            $data['paid_at'] = Carbon::now();
            $data['payment_status'] = 'paid';
            $data['transaction_reference'] = $response['id'];
            // Create order
            $order = $this->createOrderWithProducts($data);

            $notification = [
                'title' => __('general.order_push_title', [], $user->app_lang),
                'title_ar' => __('general.order_push_title', [], 'ar'),
                'title_en' => __('general.order_push_title', [], 'en'),
                'title_fr' => __('general.order_push_title', [], 'fr'),
                'body' => __('general.new_order_push_body', [], $user->app_lang),
                'body_ar' => __('general.new_order_push_body', [], 'ar'),
                'body_en' => __('general.new_order_push_body', [], 'en'),
                'body_fr' => __('general.new_order_push_body', [], 'fr'),
                'order_id' => $order->id,
                'type' => 'order_status',
            ];
            $this->sendFCMNotification($notification, $user->fcm_token);

            cart()->clearItems();
            $user->cart = null;
            $user->save();

            if ($platform == 'website') {
                return redirect()->route('payment.callback', ['status' => 'success', 'lang' => $lang, 'platform' => $platform, 'order_id' => $order->id]);
            }
            return redirect()->route('payment.callback', ['status' => 'success', 'lang' => $lang, 'platform' => $platform, 'order_id' => $order->id]);
        } else {
            return redirect()->route('payment.callback', ['status' => 'fail', 'lang' => $lang, 'platform' => $platform]);
        }
    }

    public function wallet_callback(Request $request, $user_id, $lang, $platform, $amount)
    {
        $checkoutId = request()->get('id');
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . $this->token])
            ->get($this->url . '/v1/checkouts/' . $checkoutId . '/payment', array('entityId' => $this->entity_id));
        $response = $response->json();
        $resultCode = $response["result"]["code"];
        $successResult1 = '/^(000\.000\.|000\.100\.1|000\.[36])/';
        $successResult2 = '/^(000\.400\.0[^3]|000\.400\.100)/';
        if (preg_match($successResult1, $resultCode) || preg_match($successResult2, $resultCode)) {
            $user = User::where('id', $user_id)->first();
            // charge balance
            $user->update(['balance' => $user->balance + $amount]);
            $notification = [
                'title' => __('general.adc_wallet', [], $user->app_lang),
                'title_ar' => __('general.adc_wallet', [], 'ar'),
                'title_en' => __('general.adc_wallet', [], 'en'),
                'title_fr' => __('general.adc_wallet', [], 'fr'),
                'body' => __('general.add_amount', [], $user->app_lang) . $amount . ' ' . __('messages.sar', [], $user->app_lang),
                'body_ar' => __('general.add_amount', [], 'ar') . $amount . ' ' . __('messages.sar', [], 'ar'),
                'body_en' => __('general.add_amount', [], 'en') . $amount . ' ' . __('messages.sar', [], 'en'),
                'body_fr' => __('general.add_amount', [], 'fr') . $amount . ' ' . __('messages.sar', [], 'fr'),
                'order_id' => 0,
                'type' => 'wallet',
            ];
            $this->sendFCMNotification($notification, $user->fcm_token);

            if ($platform == 'website') {
                return redirect()->route('payment.callback', ['status' => 'success', 'lang' => $lang, 'platform' => $platform]);
            }
            return redirect()->route('payment.callback', ['status' => 'success', 'lang' => $lang, 'platform' => $platform]);
        } else {
            return redirect()->route('payment.callback', ['status' => 'fail', 'lang' => $lang, 'platform' => $platform]);
        }
    }

    public function refund($order)
    {
        $amount = number_format((float)$order->total, 2, '.', '');
        $url = $this->url . "/v1/payments/" . $order->transaction_reference;
        $code = $order->user_id . $amount . now()->format('YmdHis') . rand(1000, 100000);;
        $data = "entityId=" . $this->entity_id .
            "&amount=" . $amount .
            "&currency=SAR" .
            "&merchantTransactionId=" . $code .
            "&paymentType=RV";

        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization:Bearer ' . $this->token
            ));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, ($this->type == "test") ? false : true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $responseData = curl_exec($ch);
            if (curl_errno($ch)) {
                return curl_error($ch);
            }
            curl_close($ch);
            $result = json_decode($responseData, true);
            $resultCode = $result["result"]["code"];

            $successResult1 = '/^(000\.000\.|000\.100\.1|000\.[36])/';
            $successResult2 = '/^(000\.400\.0[^3]|000\.400\.100)/';
 
            
            if (preg_match($successResult1, $resultCode) || preg_match($successResult2, $resultCode)) {
                // transaction
                $transaction=Transaction::create([
                'order_id'=>$order->id, 
                'user_id'=>$order->user->id, 
                'amount'=>$order->total,
                'transaction_id'=> $result['id'],
                'transaction_date'=>Carbon::now(),
                'payment_type' => 'credit',
                'payment_name' => $order->payment_name,
                'payment_gateway' => $order->payment_method,
                ]);
            
                return 'true';
            } else {
                return 'false';
            }


            
        } catch (\Exception $e) {
            return 'false';
        }
    }

}