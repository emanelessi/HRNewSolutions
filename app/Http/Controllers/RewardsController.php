<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RewardsController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->id;
        $reward = Reward::where('employee_id', $employee_id)->paginate(1);
        return view('layouts.reward')->with(compact('reward'));
    }

}
