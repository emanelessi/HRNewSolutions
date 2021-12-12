<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\editJobhistoryRequest;
use App\Http\Requests\Employee\jobhistoryRequest;
use App\Models\Department;
use App\Models\Job;
use App\Models\JobHistory;
use App\Models\User;
use App\Repositories\Web\Admin\JobEloquent;
use App\Repositories\Web\Admin\JobHistoryEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class JobHistoryController extends Controller
{
    public function __construct(JobHistoryEloquent $jobHistoryEloquent)
    {
        $this->jobHistory = $jobHistoryEloquent;
    }

    public function index()
    {
        return $this->jobHistory->index();
    }

    public function addHistory(jobhistoryRequest $request)
    {
        return $this->jobHistory->addHistory($request->all());
    }

    public function create()
    {
        return $this->jobHistory->create();
    }

    public function update(editJobhistoryRequest $request)
    {
        return $this->jobHistory->update($request->all());
    }

    public function edit($id)
    {
        return $this->jobHistory->edit($id);
    }

    public function destroy($id)
    {
        return $this->jobHistory->destroy($id);
    }

}
