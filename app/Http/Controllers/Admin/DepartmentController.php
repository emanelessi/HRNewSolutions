<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use App\Repositories\Web\Admin\DepartmentEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DepartmentController extends Controller
{
    public function __construct(DepartmentEloquent $departmentEloquent)
    {
        $this->department = $departmentEloquent;
    }
    public function index()
    {
        return $this->department->index();

    }

    public function addDepartment(Request $request)
    {
        return $this->department->addDepartment($request->all());

    }


    public function create()
    {
        return $this->department->create();

    }

    public function update(Request $request)
    {
        return $this->department->update($request->all());


    }

    public function edit($id)
    {
        return $this->department->edit($id);

    }

    public function destroy($id)
    {
        return $this->department->destroy($id);

    }

}
