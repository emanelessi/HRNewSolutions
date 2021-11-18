<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee\editEmployeeRequest;
use App\Http\Requests\Employee\editHolidayRequest;
use App\Http\Requests\Employee\EmployeeRequest;
use App\Http\Requests\Employee\HolidayRequest;
use App\Repositories\AdminEloquent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(AdminEloquent $adminEloquent)
    {
        $this->admin = $adminEloquent;
    }

    public function home()
    {
        return $this->admin->home();
    }
    public function employees()
    {
        return $this->admin->employees();
    }
    public function employee(EmployeeRequest $request)
    {
        return $this->admin->employee($request->all());
    }
    public function editEmployee(editEmployeeRequest $request,$id)
    {
        return $this->admin->editEmployee($request->all(),$id);
    }
    public function deleteEmployee($id)
    {
        return $this->admin->deleteEmployee($id);
    }
    public function holidays()
    {
        return $this->admin->holidays();
    }
    public function holiday(HolidayRequest $request,$id)
    {
        return $this->admin->holiday($request->all(),$id);
    }
    public function deleteHoliday($id)
    {
        return $this->admin->deleteHoliday($id);
    }
    public function editHoliday(editHolidayRequest $request,$id)
    {
        return $this->admin->editHoliday($request->all(),$id);
    }

}
