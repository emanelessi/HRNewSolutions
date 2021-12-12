<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AddEmployeeRequest;
use App\Http\Requests\Employee\editEmployeeRequest;
use App\Http\Requests\Employee\EmployeeRequest;
use App\Repositories\Web\Admin\EmployeeEloquent;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(EmployeeEloquent $EmployeeEloquent)
    {
        $this->Employee = $EmployeeEloquent;
    }

    public function index()
    {
        return $this->Employee->index();
    }

    public function home()
    {
        return $this->Employee->home();
    }

    public function addEmployee(AddEmployeeRequest $request)
    {
        return $this->Employee->addEmployee($request->all());

    }

    public function create()
    {
        return $this->Employee->create();
    }


    public function update(editEmployeeRequest $request)
    {
        return $this->Employee->update($request->all());

    }

    public function edit($id)
    {
        return $this->Employee->edit($id);
    }

    public function destroy($id)
    {
        return $this->Employee->destroy($id);

    }


}
