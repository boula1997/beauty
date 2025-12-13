<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ShippingRequest;
use Illuminate\Support\Facades\File;
use App\Models\Shipping;
use Illuminate\Http\Request;
use App\Models\File as ModelsFile;
use Exception;

class ShippingController extends Controller
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    private $shipping;
    function __construct(Shipping $shipping)
    {
        $this->middleware('permission:shipping-list|shipping-create|shipping-edit|shipping-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:shipping-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:shipping-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:shipping-delete', ['only' => ['destroy']]);
        $this->shipping = $shipping;
    }

    public function index()
    {
        try {
            $shippings = $this->shipping->orderBy('sort')->paginate(10);
            return view('admin.crud.shippings.index', compact('shippings'))
                ->with('i', (request()->input('shipping', 1) - 1) * 5);
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
        return view('admin.crud.shippings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShippingRequest $request)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $data['isTop'] = $request->has('isTop') ? 1 : 0;
            $shipping = $this->shipping->create($data);
            $shipping->uploadFile();
            return redirect()->route('shippings.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function show(Shipping $shipping)
    {
        return view('admin.crud.shippings.show', compact('shipping'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipping $shipping)
    {
        // dd($shipping);
        return view('admin.crud.shippings.edit', compact('shipping'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $shipping
     * @return \Illuminate\Http\Response
     */
    public function update(ShippingRequest $request, Shipping $shipping)
    {
        try {
            $data = $request->except('image','profile_avatar_remove');
            $data['isTop'] = $request->has('isTop') ? 1 : 0;
            $shipping->update($data);
            $shipping->updateFile();

            return redirect()->route('shippings.index', compact('shipping'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipping $shipping)
    {
        try {
            $shipping->delete();
            $shipping->deleteFile();
            return redirect()->route('shippings.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }


    public function sotrable(Request $request)
    {
       
        if (is_array($request->ids)) {
            //            $page = (int)($request->page);
            foreach ($request->ids as $sortOrder => $id) {
                $shipping = Shipping::find($id);
                $shipping->sort = $sortOrder; //+ ($page * config('default_pagination'));
                $shipping->save();
            }
            
            return ['success' => true, 'message' => __('messages.saved_success')];
        }
        return ['success' => false, 'message' => __('messages.saved_success')];
    }

    public function toggleIsTop($id)
    {
        $shipping = Shipping::findOrFail($id);
        $shipping->isTop = !$shipping->isTop;
        $shipping->save();
    
        return response()->json([
            'success' => true,
            'newValue' => $shipping->isTop,
            'message' => 'تم التحديث بنجاح' 
        ], 200);
    }
    
}