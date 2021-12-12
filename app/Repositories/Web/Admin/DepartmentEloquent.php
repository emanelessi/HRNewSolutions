<?php


namespace App\Repositories\Web\Admin;


use App\Models\Department;

class DepartmentEloquent
{
    private $model;

    public function __construct(Department $department)
    {
        $this->model = $department;
    }

}
