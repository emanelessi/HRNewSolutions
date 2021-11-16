<?php

namespace App\Repositories;

use App\Http\Resources\checkinoutResource;
use App\Http\Resources\holidayResource;
use App\Http\Resources\profileResource;
use App\Http\Resources\projectResource;
use App\Models\CheckInOut;
use App\Models\Holiday;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeEloquent
{
    private $model;

    public function __construct(User $employee)
    {
        $this->model = $employee;
    }

    public function login()
    {
        $proxy = Request::create('oauth/token', 'POST');

        $response = Route::dispatch($proxy);

        $statusCode = $response->getStatusCode();
        $response = json_decode($response->getContent());
        if ($statusCode != 200)
            return response_api(false, $statusCode, $response->message, $response);
        $response_token = $response;
        $token = $response->access_token;
        \request()->headers->set('Authorization', 'Bearer ' . $token);

        $proxy = Request::create('api/profile', 'GET');
        $response = Route::dispatch($proxy);

        $statusCode = $response->getStatusCode();
        $response = json_decode($response->getContent());
        $employee = \auth()->user();
        return response_api(true, $statusCode, 'Successfully Login', ['token' => $response_token, 'employee' => $employee]);

    }

    public function register(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        $employee = User::create($data);
        return response_api(true, 200, 'Successfully Register!', $employee->fresh());

    }

    public function profile($id = null)
    {
        if (isset($id)) {
            $employee = User::find($id);
            if (!isset($employee)) {
                return response_api(false, 422, 'Error', new \stdClass());
            }
        }
        $employee = isset($id) ? $employee : \auth()->user();
        return response_api(true, 200, 'Success', new profileResource($employee));
    }
    public function editProfile(array $data)
    {
        $id = auth()->user()->id;
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
    public function projects(){
        $page_number = intval(\request()->get('page_number'));
        $page_size = \request()->get('page_size');
//        $project=Project::where('',auth()->user()->id);
        $total_records = Project::count();
        $total_pages = ceil($total_records / $page_size);
        $myproject= Project::skip(($page_number - 1) * $page_size)
            ->take($page_size)->get();
        return response_api(true, 200, 'Success', projectResource::collection($myproject), $page_number, $total_pages, $total_records);
    }
    public function checkinout(array $data){
        $id = auth()->user()->id;
        $checkinout =new CheckInOut();
        $checkinout->time = $data['time'];
        $checkinout->type = $data['type'];
        $checkinout->employee_id  = $id;
        $checkinout->save();
        return response_api(true, 200, 'Successfully Added!', ['checkinout' => new checkinoutResource($checkinout)]);
    }
    public function holiday(array $data){
        $id = auth()->user()->id;
        $holiday =new Holiday();
        $holiday->duration = $data['duration'];
        $holiday->description = $data['description'];
        $holiday->date = $data['date'];
        $holiday->type = $data['type'];
        $holiday->status = 'pending';
        $holiday->employee_id  = $id;
        $holiday->save();
        return response_api(true, 200, 'Successfully Added!', ['holiday' => new holidayResource($holiday)]);
    }


}
