<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee\EmployeeRequest;
use App\Models\Department;
use App\Models\EmployeeProject;
use App\Models\Job;
use App\Models\Reward;
use App\Models\User;
use App\Repositories\Web\EmployeeEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct(EmployeeEloquent $employeeEloquent)
    {
        $this->employee = $employeeEloquent;
    }

    public function index()
    {
        return $this->employee->profile();
    }

    public function editProfile(EmployeeRequest $request)
    {
        return $this->employee->editProfile($request->all());
    }


    public function edit()
    {
        return $this->employee->edit();
    }


}
