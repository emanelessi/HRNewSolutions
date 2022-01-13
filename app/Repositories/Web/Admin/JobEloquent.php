<?php


namespace App\Repositories\Web\Admin;


use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class JobEloquent
{
    private $model;

    public function __construct(Job $job)
    {
        $this->model = $job;
    }

    public function index()
    {
        $job = Job::paginate(10);
        return view('admin.job.job')->with(compact('job'));
    }

    public function addJob(array $data)
    {
        $job = new Job();
        $job->title = $data['title'];
        $job->description = $data['description'];
        $job->salary = $data['salary'];
        $job->save();
//        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
        return response()->json(['success'=>'post added successfully']);

    }


    public function create()
    {
        $jobs = Job::all();
        return view('admin.job.addJob')->with('jobs', $jobs);
    }

    public function update(array $data)
    {
        $id = $data['id'];
        $job = Job::find($id);
        $job->title = $data['title'];
        $job->description = $data['description'];
        $job->salary = $data['salary'];
        $job->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit($id)
    {
        $users = Job::findOrFail($id);
        return view('admin.job.editJob', compact('users'));
    }


    public function destroy($id)
    {
        $job = Job::find($id);
        $job->destroy($id);
        return Redirect::back();
    }

}
