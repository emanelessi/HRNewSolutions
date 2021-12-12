<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\EmployeeProject;
use App\Models\Holiday;
use App\Models\Project;
use App\Models\Reward;
use App\Models\User;
use App\Repositories\Web\EmployeeEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EmployeeEloquent $employeeEloquent)
    {
        $this->middleware('auth');
        $this->employee = $employeeEloquent;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $this->employee->index();
    }

}
