<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\EmployeeProject;
use App\Models\Job;
use App\Models\Reward;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $profile = User::where('id', $user_id)->get();
        $departments = Department::all();
        $users = User::all();
        $projects = EmployeeProject::where('employee_id', $user_id)->get();
        $rewards = Reward::where('employee_id', $user_id)->get();
        return view('layouts.profile')->with(compact('profile', 'departments', 'users', 'projects', 'rewards'));
    }

    public function editProfile(Request $request)
    {
        $img=$request->input('photo');
        $path='storage';
        $name=time()+rand(1,1000000000000000).'.'.$img->getClientOriginalExtension();
        Storage::disk('local')->put($path.$name,file_get_contents($img));
        $user_id = Auth::user()->id;
        $users = User::find($user_id);
        $users->first_name = $request->input('first_name');
        $users->last_name = $request->input('last_name');
        $users->email = $request->input('email');
        $users->password = bcrypt($request->input('password'));
        $users->phone_number = $request->input('phone_number');
        $users->hire_date = $request->input('hire_date');
        $users->salary = $request->input('salary');
        $users->photo = $path.$name;
        $users->department_id = $request->input('department_id');
        $users->job_id = $request->input('job_id');
        $users->manager_id = $request->input('manager_id');
        $users->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }


    public function edit(Request $request)
    {


        $employees = User::all();
        $Jobs = Job::all();
        $Departments = Department::all();
        return view('layouts.editProfile', compact( 'Jobs', 'Departments','employees'));

    }


}
