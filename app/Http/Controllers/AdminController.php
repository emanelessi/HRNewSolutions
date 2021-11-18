<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee\editEmployeeRequest;
use App\Http\Requests\Employee\EmployeeRequest;
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
}
