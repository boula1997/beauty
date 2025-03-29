<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\MerchantRequest;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use App\Models\File as ModelsFile;
use App\Models\Merchant;
use App\Models\Store;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Notifications\MerchantApprovedNotification;
use App\Notifications\MerchantRejected;

class MerchantRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $merchantRequest;
    function __construct(MerchantRequest $merchantRequest)
    {
        $this->middleware('permission:merchantRequest-list|merchantRequest-create|merchantRequest-edit|merchantRequest-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:merchantRequest-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:merchantRequest-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:merchantRequest-delete', ['only' => ['destroy']]);
        $this->merchantRequest = $merchantRequest;
    }

    public function index()
    {
        try {
            $data = MerchantRequest::paginate(10);
            return view('admin.crud.merchantRequests.index', compact('data'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.merchantRequests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);
            $user = MerchantRequest::create($input);
            $user->uploadFile();
            return redirect()->route('merchantRequests.index')
                ->with('success', 'MerchantRequest created successfully');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merchantRequest = MerchantRequest::find($id);
        return view('admin.crud.merchantRequests.show', compact('merchantRequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = MerchantRequest::find($id);

        return view('admin.crud.merchantRequests.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $input = $request->except('image','profile_avatar_remove');
            if (!empty($input['password'])) {
                $input['password'] = Hash::make($input['password']);
            } else {
                $input = Arr::except($input, array('password'));
            }
            $user = MerchantRequest::find($id);
            $user->update($input);
            $user->updateFile();
            return redirect()->route('merchantRequests.index')
                ->with('success', 'MerchantRequest updated successfully');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user = MerchantRequest::find($id);
            $user->delete();
            $user->deleteFile();
            return redirect()->route('merchantRequests.index')
                ->with('success', 'MerchantRequest deleted successfully');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    public function reject($id)
    {
        DB::beginTransaction();
        try {
            $merchantRequest = MerchantRequest::findOrFail($id);
            $merchantRequest->status = 'rejected';
            $merchantRequest->rejected_at = now(); 
            $merchantRequest->save();
            $merchantRequest->notify(new MerchantRejected());
            DB::commit();
            return redirect()->back()->with('success', __('general.merchantRequestRejected'));
        } catch (Exception $e) {
            DB::rollback();
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    public function accept($id)
    {
        DB::beginTransaction();
        try {
            $merchantRequest = MerchantRequest::findOrFail($id);

            $existingMerchant = Merchant::firstWhere(function ($query) use ($merchantRequest) {
                $query->where('email', $merchantRequest->email)
                      ->orWhere('phone', $merchantRequest->phone);
            });
            

            if ($existingMerchant) {
                if ($existingMerchant->email === $merchantRequest->email) {
                    return redirect()->back()->with('error', __('general.email_already_exists'));
                }
    
                if ($existingMerchant->phone === $merchantRequest->phone) {
                    return redirect()->back()->with('error', __('general.phone_already_exists'));
                }
            }

            $username = Merchant::where('username', $merchantRequest->username)->exists() 
            ? generateMerchantUsername($merchantRequest->email) 
            : $merchantRequest->username;
            
            $merchant=Merchant::create([
               'merchantName'=> $merchantRequest->merchantName,
               'email'=> $merchantRequest->email,
               'phone'=> $merchantRequest->phone,
               'status'=>1,
               'username'=>$username ,
               'password'=> $merchantRequest->password,
            ]);    
             
            $store=Store::create([
                'en' => [
                    'title' => $merchantRequest->storeName,
                ],

                'email'=> $merchantRequest->email,
                'phone'=> $merchantRequest->phone,
                'address'=> $merchantRequest->address,
                'merchant_id'=> $merchant->id,
                
            ]);
            
            $merchant->store_id=$store->id;
            $merchant->save();
            
            $merchantRequest->status = 'approved';
            $merchantRequest->approved_at = now(); 
            $merchantRequest->save();

            $merchant->notify(new MerchantApprovedNotification());
            
            DB::commit();
            return redirect()->back()->with('success', __('general.merchantRequestApproved'));
        } catch (Exception $e) {
            DB::rollback();
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }


}