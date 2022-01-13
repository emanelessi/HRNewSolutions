<?php


namespace App\Repositories\Web\admin;


use App\Http\Requests\admin\AddEmployeeRequest;
use App\Models\Department;
use App\Models\EmployeeProject;
use App\Models\Holiday;
use App\Models\Job;
use App\Models\Reward;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class EmployeeEloquent
{
    private $model;

    public function __construct(User $employee)
    {
        $this->model = $employee;
    }
    public function index()
    {
        $employee = User::paginate(10);
//        dd($employee->items()[0]->department);
        $departments = Department::all();
        $jobs = Job::all();
        $users = User::all();
        $projects = EmployeeProject::all();
        $rewards = Reward::all();
        return view('admin.employee.employee')->with(compact('employee', 'departments', 'jobs', 'users', 'projects', 'rewards'));
    }

    public function home()
    {
        $users = User::all();
        $departments = Department::all();
        $projects = EmployeeProject::all();
        $rewards = Reward::all();
        $holidays = Holiday::all();
        $jobs = Job::all();
        $chartjs= app()->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July'])
            ->datasets([
                [
                    "label" => "My First dataset",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [65, 59, 80, 81, 56, 55, 40],
                ],
                [
                    "label" => "My Second dataset",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [12, 33, 44, 44, 55, 23, 40],
                ]
            ])
            ->options([]);
        $record = User::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(created_at) as day_name"), DB::raw("DAY(created_at) as day"))
            ->where('created_at', '>', Carbon::today()->subDay(6))
            ->groupBy('day_name','day')
            ->orderBy('day')
            ->get();

        $data = [];

        foreach($record as $row) {
            $data['label'][] = $row->day_name;
            $data['data'][] = (int) $row->count;
        }

        $data['chart_data'] = json_encode($data);

        return view('admin.home')->with('users', $users)->with('departments', $departments)->with('projects', $projects)->with('rewards', $rewards)->with('holidays', $holidays)->with('jobs', $jobs)->with('chartjs',$chartjs);
    }

    public function addEmployee(array $data)
    {
        $employee = new User();
        $employee->first_name = $data['first_name'];
        $employee->last_name = $data['last_name'];
        $employee->email = $data['email'];
        $employee->password = $data['password'];
        $employee->phone_number = $data['phone_number'];
        $employee->hire_date =$data['hire_date'];
        $employee->salary = $data['salary'];
        $employee->photo = $data['photo'];
        $employee->department_id = $data['department_id'];
        $employee->job_id = $data['job_id'];
        $employee->manager_id = $data['manager_id'];
        $employee->save();
//        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
        return response()->json(['success'=>'post added successfully']);

    }

    public function create()
    {
        $employees = User::all();
        $departments = Department::all();
        $jobs = Job::all();
        return view('admin.employee.addEmployee')->with(compact('employees', 'departments', 'jobs'));
    }


    public function update(array $data)
    {
        $id =  $data['id'];
        $users = User::find($id);
        $users->first_name =  $data['first_name'];
        $users->last_name =  $data['last_name'];
        $users->email =  $data['email'];
        $users->password = bcrypt( $data['password']);
        $users->phone_number =  $data['phone_number'];
        $users->hire_date =  $data['hire_date'];
        $users->salary =  $data['salary'];
        $users->photo =  $data['photo'];
        $users->department_id =  $data['department_id'];
        $users->job_id =  $data['job_id'];
        $users->manager_id =  $data['manager_id'];
        $users->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        $Departments = Department::all();
        $Jobs = Job::all();
        return view('admin.employee.editEmployee', compact('users', 'Departments', 'Jobs'));
    }


    public function destroy($id)
    {
        $movie = User::find($id);
        $movie->destroy($id);
        return Redirect::back();
    }


}
