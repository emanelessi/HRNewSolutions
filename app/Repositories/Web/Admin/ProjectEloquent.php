<?php


namespace App\Repositories\Web\Admin;



use App\Models\EmployeeProject;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProjectEloquent
{
    private $model;

    public function __construct(Project $project)
    {
        $this->model = $project;
    }
    public function index()
    {
        $project = EmployeeProject::paginate(10);
        $employees = User::all();
        return view('layouts.Admin.project.project')->with(compact('project', 'employees'));
    }

    public function addProject(array $data)
    {
        $project = new Project();
        $project->name = $data['name'];
        $project->salary = $data['salary'];
        $project->description = $data['description'];
        $project->manager_id = $data['manager_id'];
        $project->members = $data['members'];
        $project->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }


    public function create()
    {
        $employees = User::all();
        return view('layouts.Admin.project.addProject')->with('employees', $employees);
    }

    public function update(array $data)
    {
        $id = $data['id'];
        $project = Project::find($id);
        $project->name = $data['name'];
        $project->salary = $data['salary'];
        $project->description = $data['description'];
        $project->manager_id = $data['manager_id'];
        $project->members = $data['members'];
        $project->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit($id)
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
