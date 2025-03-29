<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\MessageRequest;
use App\Mail\MessageAdminMail;
use App\Mail\MessageMail;
use App\Models\Message;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $message;
    function __construct(Message $message)
    {
        $this->middleware('permission:message-list|message-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:message-delete', ['only' => ['destroy']]);
        $this->middleware('permission:message-reply', ['only' => ['reply']]);
        $this->message = $message;
    }


    public function index()
    {
        try {
            $data = $this->message->latest()->get();
            return view('admin.crud.messages.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return view('admin.crud.messages.show', compact('message'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        try {
            $message->delete();
            return redirect()->route('messages.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function reply($id)
    {
        try {
            $message=$this->message->find($id);
            return view('admin.crud.messages.reply',compact('message'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function emailReply($id,MessageRequest $request)
    {
        try {
            $data = $request->all();
            $message=$this->message->find($id);
            // Mail::to($message->email)->send(new MessageAdminMail($data));
            return redirect()->route('messages.index')
                ->with('success', trans('general.replied_successfully'));
        } catch (\Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
}
