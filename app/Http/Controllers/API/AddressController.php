<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\AddressRequest;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    private $address;
    public function __construct(Address $address)
    {
        $this->middleware('auth:api');
        $this->address = $address;
    }

    public function index()
    {
        try {
            $data = AddressResource::collection(Auth::user()->addresses);
            return successResponse($data,trans('general.sent_successfully'));
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function store(AddressRequest $request)
    {
        $data=$request->all();
        $user = Auth::user();
        $data['current'] = $user->addresses()->count() == 0 ? 1 : 0;
        
        $address = Auth::user()->addresses()->create($data);

        return response()->json($address, 201);
    }

    public function show($id)
    {
        try {
            $address = Auth::user()->addresses()->find($id);
            if (!$address) {
                return response()->json(['error' => 'Address not found'], 404);
            }
    
            $data = new AddressResource($address);
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $address = Auth::user()->addresses()->find($id);
            
            if (!$address) {
                return response()->json(['error' => 'Address not found'], 404);
            }
    
            $data = new AddressResource($address);
            return successResponse($data);
        } catch (Exception $e) {

            return failedResponse($e->getMessage());
        }
    }

    public function update(AddressRequest $request, $id)
    {
        $user = Auth::user();
        $address = Auth::user()->addresses()->find($id);
        if (!$address) {
            return response()->json(['error' => 'Address not found'], 404);
        }
        $data=$request->all();
        if (isset($data['current']) && $data['current'] == 1) {
            $user->addresses()->update(['current' => 0]);
        }

        $address->update($data);

        return response()->json($address, 200);
    }

    public function destroy($id)
    {
        $address = Auth::user()->addresses()->find($id);
        if (!$address) {
            return response()->json([
                'status' => 401,
                'errors' => [
                    'message' => "Address not found"
                ]
            ], 401);
            
        }
        
        if ($address->current == 1) {
            
        return response()->json([
            'status' => 401,
            'errors' => [
                'message' => "You can't remove the current address."
            ]
        ], 401);
        }

        $address->delete();
        return response()->json(['message' => 'Address deleted successfully'], 200);
    }
    
}