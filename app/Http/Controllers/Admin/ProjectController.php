<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeProject;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->id;
        $project = EmployeeProject::where('employee_id', $employee_id)->paginate(1);
        return view('layouts.admin.project.project')->with(compact('project'));
    }

    public function addproject(Request $request)
    {
        $project = new Project();
        $project->name = $request->input('name');
        $project->salary = $request->input('salary');
        $project->description = $request->input('description');
        $project->manager_id = $request->input('manager_id');
        $project->members = $request->input('members');
        $project->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }

    public function add()
    {
        return view('layouts.admin.project.project');
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $project = Project::find($id);
        $project->name = $request->input('name');
        $project->salary = $request->input('salary');
        $project->description = $request->input('description');
        $project->manager_id = $request->input('manager_id');
        $project->members = $request->input('members');
        $project->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function destroy($id)
    {
        $project = Project::find($id);
        $project->destroy($id);
        return Redirect::back();
    }

}
