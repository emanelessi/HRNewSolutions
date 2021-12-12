<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeProject;
use App\Models\Project;
use App\Models\User;
use App\Repositories\Web\Admin\ProjectEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    public function __construct(ProjectEloquent $projectEloquent)
    {
        $this->project = $projectEloquent;
    }
    public function index()
    {
        $project = EmployeeProject::paginate(10);
        $employees = User::all();
        return view('layouts.Admin.project.project')->with(compact('project', 'employees'));
    }

    public function addProject(Request $request)
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


    public function create()
    {
        $employees = User::all();
        return view('layouts.Admin.project.addProject')->with('employees', $employees);
    }

    public function update(Request $request)
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

    public function edit(Request $request, $id)
    {
        $users = Project::findOrFail($id);
        return view('layouts.Admin.project.editProject', compact('users'));

    }

    public function destroy($id)
    {
        $project = EmployeeProject::find($id);
        $project->destroy($id);
        $myproject = Project::find($id);
        $myproject->destroy($id);
        return Redirect::back();
    }

}
