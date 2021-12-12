<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmployeeProject;
use App\Models\Project;
use App\Repositories\Web\ProjectEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function __construct(ProjectEloquent $ProjectEloquent)
    {
        $this->project = $ProjectEloquent;
    }
    public function index()
    {
        return $this->project->index();

    }

}
