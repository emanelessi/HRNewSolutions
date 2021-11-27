<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{
    public function index()
    {
        $job = Job::paginate(10);
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
        return view('layouts.admin.job.addjob');
    }

    public function create()
    {
        $jobs = DB::select("select * from jobs ");
        return view('layouts.admin.job.addjob')->with('jobs', $jobs);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $job = Job::find($id);
        $job->title = $request->input('title');
        $job->description = $request->input('description');
        $job->salary = $request->input('salary');
        $job->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit(Request $request)
    {

        $id = $request->input('id');
        $users = Job::find($id);
        return view('layouts.admin.job.editjob', compact('users'));

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
