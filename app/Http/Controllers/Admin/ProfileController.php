<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProfileRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use DB;
use Hash;
use Illuminate\Support\Arr;
use App\Models\File as ModelsFile;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{

    public function edit()
    {
        $admin = Admin::find(auth('admin')->user()->id);
        return view('admin.crud.profile.edit', compact('admin'));
    }


    public function update(ProfileRequest $request)
    {
        $input = $request->except('image','profile_avatar_remove');
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $admin = Admin::find(auth('admin')->user()->id);
        $admin->update($input);
        $admin->updateFile();


        return redirect()->route('dashboard')
            ->with('success', 'Admin updated successfully');
    }
}
