<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RewardController extends Controller
{
    public function index()
    {
        $reward = Reward::paginate(10);
        return view('layouts.admin.reward.reward')->with(compact('reward'));
    }

    public function addreward(Request $request)
    {
        $reward = new Reward();
        $reward->cost = $request->input('cost');
        $reward->note = $request->input('note');
        $reward->employee_id = $request->input('employee_id');
        $reward->project_id = $request->input('project_id');
        $reward->save();
        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
    }

    public function add()
    {
        return view('layouts.admin.reward.addreward');
    }
    public function create()
    {
        $employees = DB::select("select * from users ");
        $projects = DB::select("select * from projects ");
        return view('layouts.admin.reward.addreward')->with(compact('employees','projects'));
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
    public function edit(Request $request)
    {

        $id = $request->input('id');
        $users = Reward::find($id);
        return view('layouts.admin.reward.editreward', compact('users'));

    }


    public function destroy($id)
    {
        $reward = Reward::find($id);
        $reward->destroy($id);
        return Redirect::back();
    }

}
