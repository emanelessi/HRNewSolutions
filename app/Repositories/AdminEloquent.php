<?php

namespace App\Repositories;

use App\Http\Resources\employeeResource;
use App\Http\Resources\employeesResource;
use App\Models\Admin;
use App\Models\User;

class AdminEloquent
{
    private $model;

    public function __construct(Admin $admin)
    {
        $this->model = $admin;
    }
    public function home(){
        dd('You are active');
    }
    public function employees()
    {
        $page_number = intval(\request()->get('page_number'));
        $page_size = \request()->get('page_size');
        $total_records = User::count();
        $total_pages = ceil($total_records / $page_size);
        $employee = User::skip(($page_number - 1) * $page_size)
            ->take($page_size)->get();
        return response_api(true, 200, 'Success', employeesResource::collection($employee), $page_number, $total_pages, $total_records);
    }

}
