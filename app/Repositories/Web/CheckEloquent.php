<?php


namespace App\Repositories\Web;


use App\Models\CheckInOut;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class CheckEloquent
{
    private $model;

    public function __construct(CheckInOut $check)
    {
        $this->model = $check;
    }
    public function addCheck(array $data)
    {
        $user_ip = Request::ip();
        if ($user_ip == '127.0.0.1') {
            $check = new CheckInOut();
            $check->time = $data['time'];
            $check->type = $data['type'];
            $check->employee_id = $data['employee_id'];
            $check->save();
            return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
        } else {
            return Redirect::back()->withErrors(['You are not in the company', 'The Message']);
        }

    }
    public function add()
    {
        return view('layouts.check');
    }
}
