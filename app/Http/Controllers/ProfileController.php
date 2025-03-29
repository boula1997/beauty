<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Address;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $request)
    {

        $products = Product::latest()->paginate(6);
        
        $type = $request->route('type');
        
        if($type == 'notifications'){
            
            return view('front.profile.index', compact('products','type'));
        }
        elseif($type == 'wallet'){
            return view('front.profile.index', compact('products', 'type'));
        }
        elseif($type == 'orders'){
            
            $orders = auth()->user()->orders()->orderBy('created_at', 'desc')->paginate(4);
            return view('front.profile.index', compact('products', 'orders','type'));
        }
        elseif($type == 'refund'){
            return view('front.profile.index', compact('products', 'type'));
        }
        elseif($type == 'transactions'){
            
            $transactions = auth()->user()->transactions()->orderBy('created_at', 'desc')->paginate(4);
            return view('front.profile.index', compact('products', 'transactions','type'));
        }
        elseif($type == 'addresses'){
            
            $addresses = auth()->user()->addresses()->orderBy('created_at', 'desc')->paginate(6);
            return view('front.profile.index', compact('products', 'type','addresses'));
        }
        else{
            $type='info';
            return view('front.profile.index', compact('products','type'));    
        }
      
    }

    public function update(Request $request)
    {
        // $request->validate([
        //     'fanme' => ['required', 'string', 'max:255'],
        //     'lanme' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        // ]);

        try {
            $data = $request->except('image');
            if ($request->has('password'))
                $data['password'] = Hash::make($request->password);

            $user = auth()->user();
            $user->updateFile();
            $user->update($data);
            return redirect()->route('show_profile','info')
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => __('general.something_wrong')]);

        }
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = auth()->user();

        // Check if the current password matches
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password is incorrect');
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password updated successfully');
    }

    public function addAddress(Request $request)
    {

        try {
            $data = $request->except('image');
            $user = auth()->user();
            $data['user_id'] = auth()->user()->id;
            Address::create($data);
            return redirect()->route('show_profile','addresses')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => __('general.something_wrong')]);

        }
    }

}