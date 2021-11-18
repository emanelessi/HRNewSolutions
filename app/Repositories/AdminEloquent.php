<?php

namespace App\Repositories;

use App\Http\Resources\employeeResource;
use App\Http\Resources\employeesResource;
use App\Http\Resources\holidayResource;
use App\Http\Resources\jobResource;
use App\Http\Resources\jobsResource;
use App\Http\Resources\profileResource;
use App\Http\Resources\projectResource;
use App\Http\Resources\projectsResource;
use App\Http\Resources\rewardResource;
use App\Models\Admin;
use App\Models\EmployeeProject;
use App\Models\Holiday;
use App\Models\Job;
use App\Models\Project;
use App\Models\Reward;
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
    public function holidays()
    {
        $page_number = intval(\request()->get('page_number'));
        $page_size = \request()->get('page_size');
        $total_records = Holiday::count();
        $total_pages = ceil($total_records / $page_size);
        $holiday = Holiday::skip(($page_number - 1) * $page_size)
            ->take($page_size)->get();
        return response_api(true, 200, 'Success', holidayResource::collection($holiday), $page_number, $total_pages, $total_records);
    }
    public function holiday(array $data,$id)
    {
        $holiday = new Holiday();
        $holiday->duration = $data['duration'];
        $holiday->description = $data['description'];
        $holiday->date = $data['date'];
        $holiday->type = $data['type'];
        $holiday->status = 'pending';
        $holiday->employee_id = $id;
        $holiday->save();
        return response_api(true, 200, 'Successfully Added!', ['holiday' => new holidayResource($holiday)]);
    }
    public function deleteHoliday($id){
        $holiday = Holiday::findOrFail($id);
        $holiday->delete();
        return response_api(true, 200, 'Successfully Deleted!','');

    }
    public function editHoliday(array $data,$id)
    {
        $holiday = Holiday::find($id);
        if ($data['duration'] != null) {
            $holiday->duration = $data['duration'];
        }
        if ($data['description'] != null) {
            $holiday->description = $data['description'];
        }
        if ($data['date'] != null) {
            $holiday->date = $data['date'];
        }
        if ($data['type'] != null) {
            $holiday->type = $data['type'];
        }
        if ($data['status'] != null) {
            $holiday->status = $data['status'];
        }

        $holiday->save();
        return response_api(true, 200, 'Successfully Updated!', ['holiday' => new holidayResource($holiday)]);
    }
    public function jobs()
    {
        $page_number = intval(\request()->get('page_number'));
        $page_size = \request()->get('page_size');
        $total_records = Job::count();
        $total_pages = ceil($total_records / $page_size);
        $job = Job::skip(($page_number - 1) * $page_size)
            ->take($page_size)->get();
        return response_api(true, 200, 'Success', jobsResource::collection($job), $page_number, $total_pages, $total_records);
    }
    public function projects()
    {
        $page_number = intval(\request()->get('page_number'));
        $page_size = \request()->get('page_size');
        $total_records = EmployeeProject::count();
        $total_pages = ceil($total_records / $page_size);
        $project = EmployeeProject::skip(($page_number - 1) * $page_size)
            ->take($page_size)->get();
        return response_api(true, 200, 'Success', projectsResource::collection($project), $page_number, $total_pages, $total_records);
    }
    public function rewards()
    {
        $page_number = intval(\request()->get('page_number'));
        $page_size = \request()->get('page_size');
        $total_records = Reward::count();
        $total_pages = ceil($total_records / $page_size);
        $myrewards= Reward::skip(($page_number - 1) * $page_size)
            ->take($page_size)->get();
        return response_api(true, 200, 'Success', rewardResource::collection($myrewards), $page_number, $total_pages, $total_records);
    }

}
