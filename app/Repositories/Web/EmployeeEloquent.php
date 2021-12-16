<?php


namespace App\Repositories\Web;


use App\Models\Admin;
use App\Models\Department;
use App\Models\EmployeeProject;
use App\Models\Holiday;
use App\Models\Job;
use App\Models\Reward;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class EmployeeEloquent
{
    private $model;

    public function __construct(User $employee)
    {
        $this->model = $employee;
    }

    public function index()
    {
        $users = User::all();
        $departments = Department::all();
        $projects = EmployeeProject::all();
        $rewards = Reward::all();
        $holidays = Holiday::all();
        $jobs = Job::all();

        return view('admin.home')->with(compact('users','departments','projects','rewards','holidays','jobs'));
    }

    public function profile()
    {
        $user_id = Auth::user()->id;
        $profile = Admin::where('id', $user_id)->get();
        $departments = Department::all();
        $users = User::all();
        $projects = EmployeeProject::where('employee_id', $user_id)->get();
        $rewards = Reward::where('employee_id', $user_id)->get();
        return view('admin.profile.profile')->with(compact('profile', 'departments', 'users', 'projects', 'rewards'));
    }

    public function editProfile(array $data)
    {

        $user_id = Auth::user()->id;
        $users = Admin::find($user_id);


        if ($data['username'] != null) {
            $users->username = $data['username'];
        }
        if ($data['email'] != null) {
            $users->email = $data['email'];
        }
        $users->password = bcrypt($data['password']);

        if ($data['photo'] != null) {
            $path = 'storage';
            $name = time() + rand(1, 1000000000000000) . '.' . $data['photo']->getClientOriginalExtension();
            Storage::disk('local')->put($path . $name, file_get_contents($data['photo']));
            $users->photo = $path . $name;
        }
        $users->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit()
    {

        return view('admin.profile.editProfile', );
    }

}
