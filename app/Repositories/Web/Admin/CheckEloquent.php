<?php


namespace App\Repositories\Web\admin;


use App\Models\CheckInOut;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckEloquent
{
    private $model;

    public function __construct(CheckInOut $checkInOut)
    {
        $this->model = $checkInOut;
    }

    public function index()
    {
        $checks = CheckInOut::paginate(10);
        $employees = User::all();
        return view('admin.check.check')->with(compact('checks', 'employees'));
    }

    public function addCheck(array $data)
    {
        $check = new CheckInOut();
        $check->time = $data['time'];
        $check->type = $data['type'];
        $check->employee_id = $data['employee_id'];
        $check->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }


    public function create()
    {
        $employees = User::all();
        return view('admin.check.addCheck')->with('employees', $employees);
    }

    public function update(array $data)
    {
        $id = $data['id'];
        $check = CheckInOut::find($id);
        $check->time = $data['time'];
        $check->type = $data['type'];
        $check->employee_id = $data['employee_id'];
        $check->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);
    }

    public function edit($id)
    {
        $users = User::all();
        $check = CheckInOut::findOrFail($id);
        return view('admin.check.editCheck', compact('users', 'check'));
    }


    public function destroy($id)
    {
        $check = CheckInOut::find($id);
        $check->destroy($id);
        return Redirect::back();
    }

}
