<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\CheckInOutRequest;
use App\Http\Requests\Employee\HolidayRequest;
use App\Http\Requests\Employee\ProfileRequest;
use App\Http\Requests\Employee\SignupRequest;
use App\Repositories\EmployeeEloquent;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function __construct(EmployeeEloquent $employeeEloquent)
    {
        $this->employee = $employeeEloquent;
    }

    public function login()
    {
        return $this->employee->login();
    }

    public function register(SignupRequest $request)
    {
        return $this->employee->register($request->all());

    }

    public function profile($id = null)
    {
        return $this->employee->profile($id);

    }

    public function editProfile(ProfileRequest $request)
    {
        return $this->employee->editProfile($request->all());
    }

    public function projects()
    {
        return $this->employee->projects();
    }

    public function rewards()
    {
        return $this->employee->rewards();
    }

    public function checkinout(CheckInOutRequest $request)
    {
        return $this->employee->checkinout($request->all());
    }

    public function holiday(HolidayRequest $request)
    {
        return $this->employee->holiday($request->all());
    }

    public function holidays()
    {
        return $this->employee->holidays();
    }

    public function job()
    {
        return $this->employee->job();
    }


}
