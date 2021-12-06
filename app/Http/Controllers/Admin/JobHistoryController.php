<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Job;
use App\Models\JobHistory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class JobHistoryController extends Controller
{
    public function index()
    {
        $job_history = JobHistory::paginate(10);
        $job = Job::all();
        $department= Department::all();
        $Employees = User::all();
        return view('layouts.admin.jobHistory.jobHistory')->with(compact('job_history','job','department','Employees'));
    }

    public function addHistory(Request $request)
    {
        $job_history = new JobHistory();
        $job_history->start_date = $request->input('start_date');
        $job_history->end_date = $request->input('end_date');
        $job_history->employee_id = $request->input('employee_id');
        $job_history->job_id = $request->input('job_id');
        $job_history->department_id = $request->input('department_id');
        $job_history->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }

    public function add()
    {
        return view('layouts.admin.jobHistory.addJobHistory');
    }

    public function create()
    {
        $jobs_history = JobHistory::all();
        $jobs = Job::all();
        $departments = Department::all();
        $Employees = User::all();
        return view('layouts.admin.jobHistory.addJobHistory', compact('jobs_history', 'jobs', 'departments', 'Employees'));
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $job_history = JobHistory::find($id);
        $job_history->start_date = $request->input('start_date');
        $job_history->end_date = $request->input('end_date');
        $job_history->employee_id = $request->input('employee_id');
        $job_history->job_id = $request->input('job_id');
        $job_history->department_id = $request->input('department_id');
        $job_history->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit(Request $request, $id)
    {

        $users = JobHistory::findOrFail($id);
        $jobs = Job::all();
        $employess = User::all();
        $departments= Department::all();
        return view('layouts.admin.jobHistory.editJobHistory', compact('users','jobs','departments','employess'));

    }


    public function destroy($id)
    {
        $job_history = JobHistory::find($id);
        $job_history->destroy($id);
        return Redirect::back();
    }

}
