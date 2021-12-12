<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\editProjectRequest;
use App\Http\Requests\Employee\projectRequest;
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
        return $this->project->index();

    }

    public function addProject(projectRequest $request)
    {
        return $this->project->addProject($request->all());

    }

    public function create()
    {
        return $this->project->create();
    }

    public function update(editProjectRequest $request)
    {
        return $this->project->update($request->all());
    }

    public function edit($id)
    {
        return $this->project->edit($id);
    }

    public function destroy($id)
    {
        return $this->project->destroy($id);
    }

}
