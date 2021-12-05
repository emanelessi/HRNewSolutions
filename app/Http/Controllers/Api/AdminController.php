<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\CheckInOutRequest;
use App\Http\Requests\Employee\departmentRequest;
use App\Http\Requests\Employee\editCheckinoutRequest;
use App\Http\Requests\Employee\editDepartmentRequest;
use App\Http\Requests\Employee\editEmployeeRequest;
use App\Http\Requests\Employee\editHolidayRequest;
use App\Http\Requests\Employee\editJobhistoryRequest;
use App\Http\Requests\Employee\editJobRequest;
use App\Http\Requests\Employee\editProjectRequest;
use App\Http\Requests\Employee\editRewardRequest;
use App\Http\Requests\Employee\EmployeeRequest;
use App\Http\Requests\Employee\HolidayRequest;
use App\Http\Requests\Employee\jobhistoryRequest;
use App\Http\Requests\Employee\jobRequest;
use App\Http\Requests\Employee\projectRequest;
use App\Http\Requests\Employee\rewardRequest;
use App\Repositories\AdminEloquent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(AdminEloquent $adminEloquent)
    {
        $this->admin = $adminEloquent;
    }

    public function home()
    {
        return $this->admin->home();
    }
    public function employees()
    {
        return $this->admin->employees();
    }
    public function employee(EmployeeRequest $request)
    {
        return $this->admin->employee($request->all());
    }
    public function editEmployee(editEmployeeRequest $request,$id)
    {
        return $this->admin->editEmployee($request->all(),$id);
    }
    public function deleteEmployee($id)
    {
        return $this->admin->deleteEmployee($id);
    }
    public function holidays()
    {
        return $this->admin->holidays();
    }
    public function holiday(HolidayRequest $request,$id)
    {
        return $this->admin->holiday($request->all(),$id);
    }
    public function deleteHoliday($id)
    {
        return $this->admin->deleteHoliday($id);
    }
    public function editHoliday(editHolidayRequest $request,$id)
    {
        return $this->admin->editHoliday($request->all(),$id);
    }
    public function jobs()
    {
        return $this->admin->jobs();
    }
    public function projects()
    {
        return $this->admin->projects();
    }
    public function rewards()
    {
        return $this->admin->rewards();
    }
    public function job(jobRequest $request)
    {
        return $this->admin->job($request->all());
    }
    public function deleteJob($id)
    {
        return $this->admin->deleteJob($id);
    }
    public function editJob(editJobRequest $request,$id)
    {
        return $this->admin->editJob($request->all(),$id);
    }
    public function project(projectRequest $request,$id)
    {
        return $this->admin->project($request->all(),$id);
    }
    public function deleteProject($id)
    {
        return $this->admin->deleteProject($id);
    }
    public function editProject(editProjectRequest $request,$id)
    {
        return $this->admin->editProject($request->all(),$id);
    }
    public function reward(rewardRequest $request,$id)
    {
        return $this->admin->reward($request->all(),$id);
    }
    public function deleteReward($id)
    {
        return $this->admin->deleteReward($id);
    }
    public function editReward(editRewardRequest $request,$id)
    {
        return $this->admin->editReward($request->all(),$id);
    }
    public function jobhistories()
    {
        return $this->admin->jobhistories();
    }
    public function jobhistory(jobhistoryRequest $request,$id)
    {
        return $this->admin->jobhistory($request->all(),$id);
    }
    public function deleteJobhistory($id)
    {
        return $this->admin->deleteJobhistory($id);
    }
    public function editJobhistory(editJobhistoryRequest $request,$id)
    {
        return $this->admin->editJobhistory($request->all(),$id);
    }
    public function checkinouts()
    {
        return $this->admin->checkinouts();
    }
    public function checkinout(CheckInOutRequest $request,$id)
    {
        return $this->admin->checkinout($request->all(),$id);
    }
    public function deleteCheckinout($id)
    {
        return $this->admin->deleteCheckinout($id);
    }
    public function editCheckinout(editCheckinoutRequest $request,$id)
    {
        return $this->admin->editCheckinout($request->all(),$id);
    }
    public function departments()
    {
        return $this->admin->departments();
    }
    public function department(departmentRequest $request,$id)
    {
        return $this->admin->department($request->all(),$id);
    }
    public function deleteDepartment($id)
    {
        return $this->admin->deleteDepartment($id);
    }
    public function editDepartment(editDepartmentRequest $request,$id)
    {
        return $this->admin->editDepartment($request->all(),$id);
    }

}
