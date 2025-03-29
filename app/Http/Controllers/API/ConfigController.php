<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BSetting;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class ConfigController extends Controller
{
    private $map_api_key;

    function __construct()
    {
//        $map_api_key_server = 'AIzaSyB_l2x6zgnLTF4MKxX3S4Df9urLN6vLNP0';
        $map_api_key_server = 'AIzaSyDbPN8yiJrsC79xl4Uw4Ak9UqVHv71rC5o';
        // $map_api_key_server = $map_api_key_server ? $map_api_key_server->value : null;
        $this->map_api_key = $map_api_key_server;
    }

    public function configuration()
    {
        // $b_settings = BSetting::whereIn('key',['email','whatsapp','address','mobile'])->pluck('value','key')->toArray();


        return response()->json(
            [

                'digit_after_decimal_point' => 2,

                //App Versions
                'customer_version_ios' => (int)1,
                'customer_version_android' => (int)1,
                // 'capten_version_ios' => (int)1,
                // 'capten_version_android' => (int)1,

                'customer_android_url' => 'https://play.google.com/store/apps/details?id=com.aloo.dot.com.aloo_dot_com',
                'customer_ios_url' => 'https://apps.apple.com/eg/app/adc/id6742337276',
                // 'capten_android_url' => 'https://play.google.com/store/apps/details?id=com.aloo',
                // 'capten_ios_url' => 'https://apps.apple.com/sa/app/aloo-vender/id1645684037',

                // Tax
                'vat_number' => '311709650600003',
                'delivery_tax_fees' => '15',
                'email'=>settings()->email??'',
                'whatsapp'=>settings()->whatsapp??'',
                'address'=> optional(settings()->translations()->where('locale', 'ar')->first())->address ??'',
                'mobile'=>settings()->mobile??'',

                // 'tripDisappearedAfter' => 30,//second
                'cashOnDelivery' => true,
            ]
        );
    }

}