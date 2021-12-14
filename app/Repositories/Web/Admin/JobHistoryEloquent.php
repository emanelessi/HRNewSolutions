<?php


namespace App\Repositories\Web\Admin;


use App\Models\Department;
use App\Models\Job;
use App\Models\JobHistory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class JobHistoryEloquent
{
    private $model;

    public function __construct(JobHistory $jobHistory)
    {
        $this->model = $jobHistory;
    }
    public function index()
    {
        $job_history = JobHistory::paginate(10);
        $job = Job::all();
        $department = Department::all();
        $Employees = User::all();
        return view('admin.jobHistory.jobHistory')->with(compact('job_history', 'job', 'department', 'Employees'));
    }

    public function addHistory(array $data)
    {
        $job_history = new JobHistory();
        $job_history->start_date = $data['start_date'];
        $job_history->end_date = $data['end_date'];
        $job_history->employee_id = $data['employee_id'];
        $job_history->job_id = $data['job_id'];
        $job_history->department_id = $data['department_id'];
        $job_history->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }


    public function create()
    {
        $jobs_history = JobHistory::all();
        $jobs = Job::all();
        $departments = Department::all();
        $Employees = User::all();
        return view('admin.jobHistory.addJobHistory', compact('jobs_history', 'jobs', 'departments', 'Employees'));
    }

    public function update(array $data)
    {
        $id = $data['id'];
        $job_history = JobHistory::find($id);
        $job_history->start_date = $data['start_date'];
        $job_history->end_date = $data['end_date'];
        $job_history->employee_id = $data['employee_id'];
        $job_history->job_id = $data['job_id'];
        $job_history->department_id = $data['department_id'];
        $job_history->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit($id)
    {
        $job_history = JobHistory::findOrFail($id);
        $jobs = Job::all();
        $employess = User::all();
        $departments = Department::all();
        return view('admin.jobHistory.editJobHistory', compact('job_history', 'jobs', 'departments', 'employess'));

    }


    public function destroy($id)
    {
        $job_history = JobHistory::find($id);
        $job_history->destroy($id);
        return Redirect::back();
    }

}
