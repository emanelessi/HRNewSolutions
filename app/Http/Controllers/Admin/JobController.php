<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\editJobRequest;
use App\Http\Requests\Employee\jobRequest;
use App\Models\Job;
use App\Repositories\Web\Admin\JobEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{
    public function __construct(JobEloquent $jobEloquent)
    {
        $this->job = $jobEloquent;
    }

    public function index()
    {
        return $this->job->index();
    }

    public function addJob(jobRequest $request)
    {
        return $this->job->addJob($request->all());
    }

    public function create()
    {
        return $this->job->create();
    }

    public function update(editJobRequest $request)
    {
        return $this->job->update($request->all());
    }

    public function edit($id)
    {
        return $this->job->edit($id);
    }

    public function destroy($id)
    {
        return $this->job->destroy($id);
    }


}
