<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->job_id;
        $job = Job::where('id', $employee_id)->paginate(1);
        return view('layouts.job')->with(compact('job'));
    }

}
