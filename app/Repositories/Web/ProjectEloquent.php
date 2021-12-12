<?php


namespace App\Repositories\Web;


use App\Models\CheckInOut;
use App\Models\EmployeeProject;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectEloquent
{
    private $model;

    public function __construct(Project $project)
    {
        $this->model = $project;
    }

    public function index()
    {
        $employee_id = Auth::user()->id;
        $project = EmployeeProject::where('employee_id', $employee_id)->paginate(1);
        return view('layouts.project')->with(compact('project'));
    }

}
