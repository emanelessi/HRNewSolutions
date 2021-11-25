<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->job_id;
        $job = Job::where('id', $employee_id)->paginate(1);
        return view('layouts.admin.job.job')->with(compact('job'));
    }

    public function addjob(Request $request)
    {
        $job = new Job();
        $job->title = $request->input('title');
        $job->description = $request->input('description');
        $job->salary = $request->input('salary');
        $job->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }

    public function add()
    {
        return view('layouts.admin.job.job');
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $job = Job::find($id);
        $job->title = $request->input('title');
        $job->description = $request->input('description');
        $job->salary = $request->input('salary');
        $job->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function destroy($id)
    {
        $job = Job::find($id);
        $job->destroy($id);
        return Redirect::back();
    }
    public function showhistory()
    {

    }

}
