<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AdminRequest;
use App\Models\Admin;
use App\Models\Sessiontable;
use App\Models\Session;
use App\Models\CategorySkill;
use App\Models\CategoryTrainer;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use App\Models\File as ModelsFile;
use Exception;
use Illuminate\Support\Facades\File;
use DateTime;
use DateInterval;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:admin-list|admin-create|admin-edit|admin-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:admin-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:admin-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:admin-delete', ['only' => ['destroy']]);
        $this->middleware('permission:admin-verify', ['only' => ['verify']]);
    }


    public function index()
    {

        try {
            $data = Admin::latest()->paginate(10);
            return view('admin.crud.admins.index', compact('data'));
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
        $roles = Role::pluck('name', 'name')->all();
        return view('admin.crud.admins.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        // dd($request->input('roles'));
        try {
            $input = $request->except('image','profile_avatar_remove',);
            $input['password'] = Hash::make($input['password']);
            $input['type'] = $request->input('roles');
            $admin = Admin::create($input);
            $admin->assignRole($request->input('roles'));
            $admin->uploadFile();
            return redirect()->route('admins.index')
                ->with('success', 'Admin created successfully');
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
        $admin = Admin::find($id);
        return view('admin.crud.admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $adminRole = $admin->roles->pluck('name', 'name')->all();
        return view('admin.crud.admins.edit', compact('admin', 'roles', 'adminRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(AdminRequest $request, $id)
    {
        try {
            $input = $request->except('image','profile_avatar_remove');
            if (!empty($input['password'])) {
                $input['password'] = Hash::make($input['password']);
            } else {
                $input = Arr::except($input, array('password'));
            }
            $admin = Admin::find($id);
            $input['type'] = $request->input('roles');
            $admin->update($input);
            DB::table('model_has_roles')->where('model_id', $id)->delete();
            $admin->assignRole($request->input('roles'));
            $admin->updateFile();
            return redirect()->route('admins.index')
                ->with('success', 'Admin updated successfully');
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
            $admin = Admin::find($id);
            $admin->delete();
            $admin->deleteFile();
            File::delete($admin->image);
            return redirect()->route('admins.index',$admin->type)
                ->with('success', 'Admin deleted successfully');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    public function verify($id){

        try {
            $verification = Admin::findorfail($id);
            $verification->update(['verified'=>1]);
            return response()->json(['success' => trans('general.edit_successfully')]);
            
        } catch (Exception $e) {
            dd($e->getMessage());
            return response()->json(['error' => __($e->getMessage())]);
        }
    }


    public function sessionsCreate(Request $request, $id)
    {
        try {
            $admin = admin::find($id);
            $input = $request->all();
            $startDate = new DateTime($input['start_date']);
            $endDate = new DateTime($input['end_date']);
            $startTime = new DateTime($input['start_time']);
            $endTime = new DateTime($input['end_time']);
            $interval = new DateInterval('PT1H'); // 1-hour interval
    


            
            // Get selected days from the request
            $selectedDays = $input['days'] ?? [];
            $daysMap = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
    
            // Check the action
            if ($input['action'] === 'create') {
                // Validate if sessions already exist
                $sessionsExist = false;
    
                for ($date = clone $startDate; $date <= $endDate; $date->modify('+1 day')) {
                    $dayOfWeek = $date->format('w');
                    
                    // Check if the current day is selected
                    if (in_array($daysMap[$dayOfWeek], $selectedDays)) {
                        for ($time = clone $startTime; $time <= $endTime; $time->add($interval)) {
                            $sessionExists = Sessiontable::where('trainer_id', $admin->id)
                                ->where('date', $date->format('Y-m-d'))
                                ->where('time', $time->format('H:i:s'))
                                ->exists();
    
                            if ($sessionExists) {
                                $sessionsExist = true; // At least one session exists
                                break; // No need to check further
                            }
                        }
                    }
    
                    if ($sessionsExist) {
                        break; // Exit outer loop as well
                    }
                }
    
                // If sessions exist, return an error
                if ($sessionsExist) {
                    return redirect()->back()->with('error', __('general.sessions_already_exist'));
                }
    
                // Create sessions
                for ($date = clone $startDate; $date <= $endDate; $date->modify('+1 day')) {
                    $dayOfWeek = $date->format('w');
    
                    // Check if the current day is selected
                    if (in_array($daysMap[$dayOfWeek], $selectedDays)) {
                        for ($time = clone $startTime; $time <= $endTime; $time->add($interval)) {
                            Sessiontable::create([
                                'trainer_id' => $admin->id,
                                'date' => $date->format('Y-m-d'),
                                'time' => $time->format('H:i:s'),
                            ]);
                        }
                    }
                }
                return redirect()->route('admins.show', $admin->id)->with('success', 'Sessions created successfully.');
    
            } elseif ($input['action'] === 'delete') {
                // Validate if sessions exist to delete
                $sessionsToDeleteExist = false;
    
                for ($date = clone $startDate; $date <= $endDate; $date->modify('+1 day')) {
                    $dayOfWeek = $date->format('w');
    
                    // Check if the current day is selected
                    if (in_array($daysMap[$dayOfWeek], $selectedDays)) {
                        for ($time = clone $startTime; $time <= $endTime; $time->add($interval)) {
                            $sessionExists = Sessiontable::where('trainer_id', $admin->id)
                                ->where('date', $date->format('Y-m-d'))
                                ->where('time', $time->format('H:i:s'))
                                ->exists();
    
                            if ($sessionExists) {
                                $sessionsToDeleteExist = true; // At least one session to delete
                                break; // No need to check further
                            }
                        }
                    }
    
                    if ($sessionsToDeleteExist) {
                        break; // Exit outer loop as well
                    }
                }
    
                // If no sessions exist to delete, return an error
                if (!$sessionsToDeleteExist) {
                    return redirect()->back()->with('error', __('general.no_sessions_to_delete'));
                }
    
                // Delete sessions in the specified date and time range
                for ($date = clone $startDate; $date <= $endDate; $date->modify('+1 day')) {
                    $dayOfWeek = $date->format('w');
    
                    // Check if the current day is selected
                    if (in_array($daysMap[$dayOfWeek], $selectedDays)) {
                        for ($time = clone $startTime; $time <= $endTime; $time->add($interval)) {
                            Sessiontable::where('trainer_id', $admin->id)
                                ->where('date', $date->format('Y-m-d'))
                                ->where('time', $time->format('H:i:s'))
                                ->delete();
                        }
                    }
                }
                return redirect()->route('admins.show', $admin->id)->with('success', 'Sessions deleted successfully.');
            } else {
                return redirect()->back()->with('error', 'Invalid action specified.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}