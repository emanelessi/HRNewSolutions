<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index()
    {    $user_id = Auth::user()->id;
        $profile = User::where('id', $user_id)->get();
        $departments = DB::select("select * from departments ");
        $jobs = DB::select("select * from jobs ");
        $users = DB::select("select * from users ");
        $projects = DB::select("select * from projects");
        $rewards = DB::select("select * from rewards");

        return view('layouts.profile')->with(compact('profile','departments','jobs','users','projects','rewards'));
    }

    public function editprofile(Request $request )
    {
        $id = $request->input('id');
        $users = User::find($id);
        $users->first_name = $request->input('first_name');
        $users->last_name = $request->input('last_name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->phone_number = $request->input('phone_number');
        $users->hire_date = $request->input('hire_date');
        $users->salary = $request->input('salary');
        $users->photo = $request->input('photo');
        $users->department_id = $request->input('department_id');
        $users->job_id = $request->input('job_id');
        $users->manager_id = $request->input('manager_id');
        $users->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }


    public function edit(Request $request)
    {

        $id = $request->input('id');
        $users = User::find($id);
        return view('layouts.editprofile', compact('users'));

    }



}
