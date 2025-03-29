<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use App\Models\MerchantRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;

class MerchantAuthController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:merchant')->except('logout');
    }
    public function showLoginForm()
    {
        return view('merchant.auth.login', ['url' => route('merchant.login'), 'title'=>'Merchant', 'route'=>'merchant.login']);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('merchant')->attempt($credentials)) {
            return redirect()->route('merchant.dashboard');
        }

        return back()->withErrors(['username' => __('general.invalid_credentials')]);
    }


    public function showRegisterForm()
    {
        return view('merchant.auth.register', ['url' => route('merchant.register'), 'title'=>'Merchant', 'route'=>'merchant.register']);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'storeName'         => 'nullable|string|max:255|required_without:merchantName',
            'merchantName'      => 'nullable|string|max:255|required_without:storeName',
            'email'             => 'required|email|max:255|unique:merchantRequests,email',
            'phone'             => 'required|string|regex:/^\+9665[0-9]{8}$/|unique:merchantRequests,phone',
            'address'           => 'nullable|string|max:500',
            'username'          => 'required|string|max:255',
            'password'          => 'required|string|min:8',
            'confirm_password'  => 'required|string|same:password',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $existingMerchant = Merchant::where('email', $request->email)
        ->where('phone', $request->phone)
        ->first();

        if ($existingMerchant) {
            return back()->with('error', __('general.registration_error'));
        }

        $data=$request->except('confirm_password');
        $data['password'] = bcrypt($request->password); 
        $data['pending_at']= now();
        
        $merchantRequest=MerchantRequest::create($data);
        
        return back()->with('success', __('general.registration_success'));
    }

    public function logout()
    {
        Auth::guard('merchant')->logout();
        return redirect()->route('merchant.login');
    }
}