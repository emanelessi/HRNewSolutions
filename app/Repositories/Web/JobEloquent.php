<?php


namespace App\Repositories\Web;


use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobEloquent
{
    private $model;

    public function __construct(Job $job)
    {
        $this->model = $job;
    }
    public function index()
    {
        $employee_id = Auth::user()->job_id;
        $job = Job::where('id', $employee_id)->paginate(1);
        return view('layouts.job')->with(compact('job'));
    }
}
