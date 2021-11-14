<?php

namespace App\Repositories;

use App\Http\Resources\profileResource;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeEloquent
{
    private $model;

    public function __construct(Employee $employee)
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
        $employee = Employee::create($data);
        return response_api(true, 200, 'Successfully Register!', $employee->fresh());

    }

    public function profile($id = null)
    {
        if (isset($id)) {
            $user = Employee::find($id);
            if (!isset($user)) {
                return response_api(false, 422, 'Error', new \stdClass());
            }
        }
        $user = isset($id) ? $user : \auth()->user();
        return response_api(true, 200, 'Success', new profileResource($user));
    }

}
