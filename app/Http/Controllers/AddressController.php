<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Address;
use App\Models\Offer;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Validator;
use Illuminate\Validation\ValidationException;

class AddressController extends Controller
{

    public function  addAddress(AddressRequest $request)
    {

        try{
          
            $data=$request->except('image');
            $user = auth()->user();
            $data['current'] = $user->addresses()->count() == 0 ? 1 : 0;
            
            $address = auth()->user()->addresses()->create($data);

            return redirect()->route('show_profile', 'addresses')
            ->with('success', trans('general.created_successfully'));
        }catch(Exception $e){
            return redirect()->back()->with(['error' => __('general.something_wrong')]);

        }
    }


    public function updateAddress(AddressRequest $request)
    {
        try {
            $data = $request->except('image', 'id');
    
            $user = auth()->user();
    
            $address = $user->addresses()->where('id', $request->id)->first();
    
            if (!$address) {
                return redirect()->route('show_profile','addresses')
                ->with('error', trans('general.not_found'));
            }
    
            $address->update($data);
    
            return redirect()->route('show_profile', 'addresses')
                ->with('success', trans('general.updated_successfully'));
    
        } catch (Exception $e) {
            return redirect()->route('show_profile', 'addresses')
            ->with('error', trans('general.something_wrong'));
        }
    }
    



    public function destroy($id)
    {
        $address = auth()->user()->addresses()->find($id);
        if (!$address) {
            
            return redirect()->route('show_profile', 'addresses')
            ->with('error', trans(__('general.something_wrong')));
        }
        
        if ($address->current == 1) {
            return redirect()->route('show_profile', 'addresses')
            ->with('error', trans("You can't remove the current address."));
        }

        $address->delete();
        return redirect()->route('show_profile', 'addresses')
        ->with('success', trans( __('general.address_deleted')));
    }



    public function currentAddress($id)
    {
        $user = auth()->user();
        $address = $user->addresses()->find($id);
    
        if (!$address) {
            return redirect()->route('show_profile', 'addresses')
                ->with('error', trans('general.address_not_found'));
        }
    
        if ($address->current) {
            return redirect()->route('show_profile', 'addresses')
                ->with('success', trans('general.address_already_current'));
        }
    
        $user->addresses()->update(['current' => 0]);
    
        $address->update(['current' => 1]);
    
        return redirect()->route('show_profile', 'addresses')
            ->with('success', trans('general.address_updated_successfully'));
    }
    
    
}