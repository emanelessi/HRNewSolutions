<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmployeeProject;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->id;
        $project = EmployeeProject::where('employee_id', $employee_id)->paginate(1);
        return view('layouts.project')->with(compact('project'));
    }

}
