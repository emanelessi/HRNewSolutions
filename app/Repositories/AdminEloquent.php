<?php

namespace App\Repositories;

use App\Http\Resources\employeeResource;
use App\Http\Resources\employeesResource;
use App\Http\Resources\profileResource;
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
    public function employee(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        $employee = User::create($data);
        return response_api(true, 200, 'Successfully Added!', $employee->fresh());
    }
    public function editEmployee(array $data,$id)
    {
        $employee = User::find($id);
        $employee->first_name = $data['first_name'];
        $employee->last_name = $data['last_name'];
        if ($data['email'] != null) {
            $employee->email = $data['email'];
        }
        if ($data['password'] != null) {
            $employee->password = bcrypt($data['password']);
        }
        if ($data['phone_number'] != null) {
            $employee->phone_number = $data['phone_number'];
        }
        if ($data['hire_date'] != null) {
            $employee->hire_date = $data['hire_date'];
        }
        if ($data['salary'] != null) {
            $employee->salary = $data['salary'];
        }
        if ($data['photo'] != null) {
            $employee->photo = $data['photo'];
        }
        if ($data['department_id'] != null) {
            $employee->department_id = $data['department_id'];
        }
        if ($data['job_id'] != null) {
            $employee->job_id = $data['job_id'];
        }
        if ($data['manager_id'] != null) {
            $employee->manager_id = $data['manager_id'];
        }
        $employee->save();
        return response_api(true, 200, 'Successfully Updated!', ['profile' => new profileResource($employee)]);
    }
    public function deleteEmployee($id){
        $employee = User::findOrFail($id);
        $employee->delete();
        return response_api(true, 200, 'Successfully Deleted!','');

    }

}