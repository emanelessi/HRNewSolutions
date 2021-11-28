<?php

namespace App\Repositories;

use App\Http\Resources\checkinoutResource;
use App\Http\Resources\checkinoutsResource;
use App\Http\Resources\departmentResource;
use App\Http\Resources\employeeResource;
use App\Http\Resources\employeesResource;
use App\Http\Resources\holidayResource;
use App\Http\Resources\jobHistoryResource;
use App\Http\Resources\jobResource;
use App\Http\Resources\jobsResource;
use App\Http\Resources\profileResource;
use App\Http\Resources\projectResource;
use App\Http\Resources\projectsResource;
use App\Http\Resources\rewardResource;
use App\Models\Admin;
use App\Models\CheckInOut;
use App\Models\Department;
use App\Models\EmployeeProject;
use App\Models\Holiday;
use App\Models\Job;
use App\Models\JobHistory;
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
    public function job(array $data)
    {
        $job = new Job();
        $job->title = $data['title'];
        $job->description = $data['description'];
        $job->salary = $data['salary'];
        $job->save();
        return response_api(true, 200, 'Successfully Added!', ['job' => new jobResource($job)]);
    }
    public function deleteJob($id){
        $job = Job::findOrFail($id);
        $job->delete();
        return response_api(true, 200, 'Successfully Deleted!','');

    }
    public function editJob(array $data,$id)
    {
        $job = Job::find($id);
        if ($data['title'] != null) {
            $job->title = $data['title'];
        }
        if ($data['description'] != null) {
            $job->description = $data['description'];
        }
        if ($data['salary'] != null) {
            $job->salary = $data['salary'];
        }
        $job->save();
        return response_api(true, 200, 'Successfully Updated!', ['job' => new jobResource($job)]);
    }
    public function project(array $data,$id)
    {
        $project = new Project();
        $project->name = $data['name'];
        $project->salary = $data['salary'];
        $project->description = $data['description'];
        $project->manager_id  = null;
        $project->members = $data['members'];
        $project->save();
        $employeeproject = new EmployeeProject();
        $employeeproject->project_id  = $project->id;
        $employeeproject->employee_id = $id;
        $employeeproject->save();
        return response_api(true, 200, 'Successfully Added!', ['project' => new projectsResource($employeeproject)]);
    }
    public function editProject(array $data,$id)
    {
        $project = Project::find($id);
        if ($data['name'] != null) {
            $project->name = $data['name'];
        }
        if ($data['salary'] != null) {
            $project->salary = $data['salary'];
        }
        if ($data['description'] != null) {
            $project->description = $data['description'];
        }
        if ($data['manager_id'] != null) {
            $project->manager_id = $data['manager_id'];
        }
        if ($data['members'] != null) {
            $project->members = $data['members'];
        }
        $project->save();


        if ($data['employee_id'] != null) {
            $employeeproject = EmployeeProject::where('project_id',$id)->first();
            $employeeproject->employee_id = $data['employee_id'];
            $employeeproject->save();
            return response_api(true, 200, 'Successfully Updated!', new projectsResource($employeeproject));

        }

        return response_api(true, 200, 'Successfully Updated!', ['project' => new projectResource($project)]);
    }
    public function deleteProject($id){
        $project = Project::findOrFail($id);
        $project->delete();
        $employeeproject = EmployeeProject::where('project_id',$id)->first();
        $employeeproject->delete();
        return response_api(true, 200, 'Successfully Deleted!','');

    }
    public function reward(array $data,$id)
    {
        $reward = new Reward();
        $reward->cost = $data['cost'];
        $reward->note = $data['note'];
        $reward->employee_id  = $id;
        $reward->project_id   = $data['project_id'];
        $reward->save();
        return response_api(true, 200, 'Successfully Added!', ['reward' => new rewardResource($reward)]);
    }
    public function deleteReward($id){
        $reward = Reward::findOrFail($id);
        $reward->delete();
        return response_api(true, 200, 'Successfully Deleted!','');

    }
    public function editReward(array $data,$id)
    {
        $reward = Reward::find($id);
        if ($data['cost'] != null) {
            $reward->cost = $data['cost'];
        }
        if ($data['note'] != null) {
            $reward->note = $data['note'];
        }
        if ($data['employee_id'] != null) {
            $reward->employee_id = $data['employee_id'];
        }
        if ($data['project_id'] != null) {
            $reward->project_id = $data['project_id'];
        }
        $reward->save();
        return response_api(true, 200, 'Successfully Updated!', ['reward' => new rewardResource($reward)]);
    }
    public function jobhistories()
    {
        $page_number = intval(\request()->get('page_number'));
        $page_size = \request()->get('page_size');
        $total_records = JobHistory::count();
        $total_pages = ceil($total_records / $page_size);
        $JobHistory= JobHistory::skip(($page_number - 1) * $page_size)
            ->take($page_size)->get();
        return response_api(true, 200, 'Success', jobHistoryResource::collection($JobHistory), $page_number, $total_pages, $total_records);
    }
    public function jobhistory(array $data,$id)
    {
        $jobhistory = new JobHistory();
        $jobhistory->start_date = $data['start_date'];
        $jobhistory->end_date = $data['end_date'];
        $jobhistory->employee_id  = $id;
        $jobhistory->job_id = $data['job_id'];
        $jobhistory->department_id  = $data['department_id'];
        $jobhistory->save();
        return response_api(true, 200, 'Successfully Added!', ['jobhistory' => new jobHistoryResource($jobhistory)]);
    }
    public function deleteJobhistory($id){
        $jobhistory = JobHistory::findOrFail($id);
        $jobhistory->delete();
        return response_api(true, 200, 'Successfully Deleted!','');

    }
    public function editJobhistory(array $data,$id)
    {
        $jobhistory = JobHistory::find($id);
        if ($data['start_date'] != null) {
            $jobhistory->start_date = $data['start_date'];
        }
        if ($data['end_date'] != null) {
            $jobhistory->end_date = $data['end_date'];
        }
        if ($data['employee_id'] != null) {
            $jobhistory->employee_id = $data['employee_id'];
        }
        if ($data['job_id'] != null) {
            $jobhistory->job_id = $data['job_id'];
        }
        if ($data['department_id'] != null) {
            $jobhistory->department_id = $data['department_id'];
        }
        $jobhistory->save();
        return response_api(true, 200, 'Successfully Updated!', ['jobhistory' => new jobHistoryResource($jobhistory)]);
    }
    public function checkinouts()
    {
        $page_number = intval(\request()->get('page_number'));
        $page_size = \request()->get('page_size');
        $total_records = CheckInOut::count();
        $total_pages = ceil($total_records / $page_size);
        $checkinouts= CheckInOut::skip(($page_number - 1) * $page_size)
            ->take($page_size)->get();
        return response_api(true, 200, 'Success', checkinoutResource::collection($checkinouts), $page_number, $total_pages, $total_records);
    }
    public function checkinout(array $data,$id)
    {
        $checkinout = new CheckInOut();
        $checkinout->time = $data['time'];
        $checkinout->type = $data['type'];
        $checkinout->employee_id  = $id;
        $checkinout->save();
        return response_api(true, 200, 'Successfully Added!', ['checkinout' => new checkinoutResource($checkinout)]);
    }
    public function deleteCheckinout($id){
        $checkinout = CheckInOut::findOrFail($id);
        $checkinout->delete();
        return response_api(true, 200, 'Successfully Deleted!','');

    }
    public function editCheckinout(array $data,$id)
    {
        $checkinout = CheckInOut::find($id);
        if ($data['time'] != null) {
            $checkinout->time = $data['time'];
        }
        if ($data['type'] != null) {
            $checkinout->type = $data['type'];
        }
        if ($data['employee_id'] != null) {
            $checkinout->employee_id = $data['employee_id'];
        }
        $checkinout->save();
        return response_api(true, 200, 'Successfully Updated!', ['checkinout' => new checkinoutResource($checkinout)]);
    }
    public function departments()
    {
        $page_number = intval(\request()->get('page_number'));
        $page_size = \request()->get('page_size');
        $total_records = Department::count();
        $total_pages = ceil($total_records / $page_size);
        $departments= Department::skip(($page_number - 1) * $page_size)
            ->take($page_size)->get();
        return response_api(true, 200, 'Success', departmentResource::collection($departments), $page_number, $total_pages, $total_records);
    }
    public function department(array $data,$id)
    {
        $department= new Department();
        $department->name = $data['name'];
        $department->manager_id  =  $id;
        $department->save();
        return response_api(true, 200, 'Successfully Added!', ['department' => new departmentResource($department)]);
    }
    public function deleteDepartment($id){
        $department = Department::findOrFail($id);
        $department->delete();
        return response_api(true, 200, 'Successfully Deleted!','');

    }
    public function editDepartment(array $data,$id)
    {
        $department = Department::find($id);
        if ($data['name'] != null) {
            $department->name = $data['name'];
        }
        if ($data['manager_id'] != null) {
            $department->manager_id  = $data['manager_id'];
        }
        $department->save();
        return response_api(true, 200, 'Successfully Updated!', ['department' => new departmentResource($department)]);
    }

}
