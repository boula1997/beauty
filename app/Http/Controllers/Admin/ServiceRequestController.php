<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ServiceRequestRequest;
use App\Mail\ServiceRequestAdminMail;
use App\Mail\ServiceRequestMail;
use App\Models\ServiceRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $serviceRequest;
    function __construct(ServiceRequest $serviceRequest)
    {
        $this->middleware('permission:serviceRequest-list|serviceRequest-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:serviceRequest-delete', ['only' => ['destroy']]);
        $this->middleware('permission:serviceRequest-reply', ['only' => ['reply']]);
        $this->serviceRequest = $serviceRequest;
    }


    public function index()
    {
        try {
            $data = $this->serviceRequest->latest()->get();
            return view('admin.crud.serviceRequests.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceRequest  $serviceRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceRequest $serviceRequest)
    {
        return view('admin.crud.serviceRequests.show', compact('serviceRequest'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceRequest  $serviceRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceRequest $serviceRequest)
    {
        try {
            $serviceRequest->delete();
            return redirect()->route('serviceRequests.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function reply($id)
    {
        try {
            $serviceRequest=$this->serviceRequest->find($id);
            return view('admin.crud.serviceRequests.reply',compact('serviceRequest'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function emailReply($id,ServiceRequestRequest $request)
    {
        try {
            $data = $request->all();
            $serviceRequest=$this->serviceRequest->find($id);
            Mail::to($serviceRequest->email)->send(new ServiceRequestAdminMail($data));
            return redirect()->route('serviceRequests.index')
                ->with('success', trans('general.replied_successfully'));
        } catch (\Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
}
