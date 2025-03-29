<?php

namespace App\Http\Controllers\API;

use App\Models\Order;
use App\Models\Orderproduct;
use App\Models\User;
use App\Traits\FCMNotification;
use App\Traits\HandlesOrders;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class HyperpayController extends Controller
{
    use HandlesOrders;
    use FCMNotification;

    protected $type = "test";
    protected $url;
    protected $token;
    protected $order;
    protected $orderproduct;

    public function __construct(Order $order, Orderproduct $orderproduct)
    {
        $this->url = 'https://eu-test.oppwa.com';
        $this->token = 'OGFjN2E0Yzc5NTA0MTAxMDAxOTUwZGM3NmUzMzA1ZDl8VERCOFNjWiNQI0p5TmRTeGZwd0w=';

        $this->order = $order;

        $this->orderproduct = $orderproduct;
    }

    /**
     * apple pay
     * @param $request
     *
     */
    public function checkouts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'entityId' => 'required',
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => __('general.something_wrong'), 'errors' => $validator->errors()], 420);
        }

        $userId = $request->user_id;
        $isWallet = $request->is_wallet??false;
        if($isWallet){
            $user = User::where('id', $userId)->first();
            if (!$user) {
                return response()->json(['message' => __('general.something_wrong')], 420);
            }
            $amount = number_format((float)$request->amount, 2, '.', '');
        }else{
            $user = User::where('id', $userId)->first();
            if (!$user || ($user && !$user->cart)) {
                return response()->json(['message' => __('general.something_wrong')], 420);
            }
            cart()->clearItems();
            loadUserCart($userId);
            $amount = number_format((float)cart()->getTotal(), 2, '.', '');
        }

        $url = $this->url . "/v1/checkouts";

        $code = $userId . $amount . now()->format('YmdHis') . rand(1000, 100000);

        $data = "entityId=" . $request->entityId .
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
            return json_decode($responseData, true);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Get Payment Status
     * @param $request
     *
     */
    public function paymentStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'checkoutId' => 'required',
            'entityId' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'validation Error', 'errors' => $validator->errors()], 420);
        }

        $response = Http::withHeaders(['Authorization' => 'Bearer ' . $this->token])
            ->get($this->url . '/v1/checkouts/' . $request->checkoutId . '/payment', array('entityId' => $request->entityId));
        $json = $response->json();

        return response()->json($json, 200);
    }

    /**
     * Add to User order
     * @param $request
     *
     */
    public function order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address_id' => 'required',
            'user_id' => 'required',
            'checkout_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'validation Error', 'errors' => $validator->errors()], 420);
        }
        $user = User::where('id', $request->user_id)->first();
        cart()->clearItems();
        loadUserCart($request->user_id);
        $data['total'] = cart()->getTotal();
        $data['payment_method'] = 'digital_payment';
        $data['payment_name'] = 'apple_pay';
        $data['address_id'] = $request->address_id;
        $data['user_id'] = $request->user_id;
        $data['pending_at'] = Carbon::now();
        $data['paid_at'] = Carbon::now();
        $data['payment_status'] = 'paid';
        $data['transaction_reference'] = $request->checkout_id;
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

        return successResponse(['order_id' => $order->id]);
    }

    /**
     * Add to User Wallet
     * @param $request
     *
     */
    public function wallet(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'user_id' => 'required',
            'checkout_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'validation Error', 'errors' => $validator->errors()], 420);
        }
        $user = User::where('id', $request->user_id)->first();
        $amount = $request->amount;
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

        return successResponse();
    }

}
