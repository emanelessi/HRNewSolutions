<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\ProfileRequest;
use App\Models\EmployeeProject;
use App\Models\Project;
use App\Models\Reward;
use App\Models\User;
use App\Repositories\Web\Admin\RewardEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RewardController extends Controller
{
    public function __construct(RewardEloquent $rewardEloquent)
    {
        $this->reward = $rewardEloquent;
    }
    public function index()
    {
        $reward = Reward::paginate(10);
        $employees = User::all();
        $projects = EmployeeProject::all();
        return view('layouts.Admin.reward.reward')->with(compact('reward', 'employees', 'projects'));
    }

    public function addReward(Request $request)
    {
        $reward = new Reward();
        $reward->cost = $request->input('cost');
        $reward->note = $request->input('note');
        $reward->employee_id = $request->input('employee_id');
        $reward->project_id = $request->input('project_id');
        $reward->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }


    public function create()
    {
        $employees = User::all();
        $projects = EmployeeProject::all();
        return view('layouts.Admin.reward.addReward')->with(compact('employees', 'projects'));
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $reward = Reward::find($id);
        $reward->cost = $request->input('cost');
        $reward->note = $request->input('note');
        $reward->employee_id = $request->input('employee_id');
        $reward->project_id = $request->input('project_id');
        $reward->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit(Request $request, $id)
    {

        $reward = Reward::findOrFail($id);
        $projects = Project::all();
        $users = User::all();
        return view('layouts.Admin.reward.editReward', compact('users', 'projects', 'reward'));

    }


    public function destroy($id)
    {
        $reward = Reward::find($id);
        $reward->destroy($id);
        return Redirect::back();
    }

}
