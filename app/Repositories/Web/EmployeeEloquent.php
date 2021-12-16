<?php


namespace App\Repositories\Web;


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
        $profile = User::where('id', $user_id)->get();
        $departments = Department::all();
        $users = User::all();
        $projects = EmployeeProject::where('employee_id', $user_id)->get();
        $rewards = Reward::where('employee_id', $user_id)->get();
        return view('admin.profile.profile')->with(compact('profile', 'departments', 'users', 'projects', 'rewards'));
    }

    public function editProfile(array $data)
    {

        $user_id = Auth::user()->id;
        $users = User::find($user_id);

        if ($data['first_name'] != null) {
            $users->first_name = $data['first_name'];
        }
        if ($data['last_name'] != null) {
            $users->last_name = $data['last_name'];
        }
        if ($data['email'] != null) {
            $users->email = $data['email'];
        }
        $users->password = bcrypt($data['password']);
        $users->phone_number = $data['phone_number'];
        $users->hire_date = $data['hire_date'];
        $users->salary = $data['salary'];
        if ($data['photo'] != null) {
            $path = 'storage';
            $name = time() + rand(1, 1000000000000000) . '.' . $data['photo']->getClientOriginalExtension();
            Storage::disk('local')->put($path . $name, file_get_contents($data['photo']));
            $users->photo = $path . $name;
        }
        $users->department_id = $data['department_id'];
        $users->job_id = $data['job_id'];
        $users->manager_id = $data['manager_id'];
        $users->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit()
    {
        $employees = User::all();
        $Jobs = Job::all();
        $Departments = Department::all();
        return view('admin.profile.editProfile', compact('Jobs', 'Departments', 'employees'));
    }

}
