<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\EmployeeProject;
use App\Models\Holiday;
use App\Models\Project;
use App\Models\Reward;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $holidays = Holiday::where('employee_id', $user_id)->paginate(5);
        $projects = EmployeeProject::where('employee_id', $user_id)->paginate(5);
        $rewards = Reward::where('employee_id', $user_id)->paginate(5);
        return view('home')->with('holidays', $holidays)->with('projects', $projects)->with('rewards', $rewards);
    }
}
