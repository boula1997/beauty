<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProfileRequest;
use App\Models\Merchant;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Arr;
use App\Models\File as ModelsFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Notifications\SendOtpNotification;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{


    public function index($type)
    {
        $merchant = Merchant::find(auth('merchant')->user()->id);
        // dd($merchant);
        if($type == 'changePassword')
        {
            return view('merchant.crud.profile.index', compact('merchant','type'));
        }
        if($type == 'changeEmail')
        {
            return view('merchant.crud.profile.index', compact('merchant','type'));
        }
        else
        {
            $type='profileInfo';
            return view('merchant.crud.profile.index', compact('merchant','type'));
        }
        
    }


    public function updateInfo(Request $request)
    {
        $request->validate([
            'merchantName' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:merchants,username,' . auth('merchant')->id(),
            'phone' => 'required|string|regex:/^\+9665[0-9]{8}$/|unique:merchants,phone,' . auth('merchant')->id(),
        ]);
        
        $merchant = auth('merchant')->user();

        $merchant->update([
            'merchantName' => $request->merchantName,
            'username' => $request->username,
            'phone' => $request->phone,
        ]);
    
        return redirect()->back()->with('success', 'Merchant updated successfully');

    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required',],
            'new_password' => ['required', 'string', 'min:8','max:50', 'confirmed','regex:/[@$!%*?&]/','regex:/[0-9]/','regex:/[a-z]/','regex:/[A-Z]/'],
            ],
            [
                'new_password.required' => __('validation.new_password_required'),
                'new_password.min' => __('validation.new_password_min'),
                'new_password.max' => __('validation.new_password_max'),
                'new_password.confirmed' => __('validation.new_password_confirmed'),
                'new_password.regex' => __('validation.new_password_regex'),
            ]);
    
        $merchant = auth('merchant')->user();
        
        if (!Hash::check($request->current_password, $merchant->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }
        
        $merchant->update([
            'password' => Hash::make($request->new_password),
        ]);
    
        return redirect()->back()->with('success', 'Password updated successfully');

    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'new_email' => ['required', 'email', 'unique:merchants,email'],
        ]);
    
        $otp = rand(100000, 999999); 
        Session::put('otp', $otp);
        Session::put('new_email', $request->new_email);
        Session::put('otp_sent', true); 
    
        
        $merchant=Merchant::find( auth('merchant')->user()->id);
        $merchant->notify(new SendOtpNotification($otp));
    
        
        return redirect()->back()->with('success', __('general.otp_sent'));
    }
    
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => ['required', 'numeric'],
        ]);
    
        if ($request->otp == Session::get('otp')) {

            auth('merchant')->user()->update(['email' => Session::get('new_email')]);
    
            Session::forget(['otp', 'new_email', 'otp_sent']);
    
            return redirect()->route('merchant.profile.show','profileInfo')->with('success',  __('general.email_updated_success'));
        }
    

        return redirect()->back()->withErrors(['otp' =>  __('general.invalid_otp')]);
    }
         
    

}