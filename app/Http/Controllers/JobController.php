<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Repositories\Web\JobEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function __construct(JobEloquent $JobEloquent)
    {
        $this->job = $JobEloquent;
    }

    public function index()
    {
        return $this->job->index();

    }

}
