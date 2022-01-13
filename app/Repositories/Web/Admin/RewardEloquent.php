<?php


namespace App\Repositories\Web\Admin;


use App\Models\EmployeeProject;
use App\Models\Project;
use App\Models\Reward;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RewardEloquent
{
    private $model;

    public function __construct(Reward $reward)
    {
        $this->model = $reward;
    }
    public function index()
    {
        $reward = Reward::paginate(10);
        $employees = User::all();
        $projects = EmployeeProject::all();
        return view('admin.reward.reward')->with(compact('reward', 'employees', 'projects'));
    }

    public function addReward(array $data)
    {
        $reward = new Reward();
        $reward->cost = $data['cost'];
        $reward->note = $data['note'];
        $reward->employee_id = $data['employee_id'];
        $reward->project_id = $data['project_id'];
        $reward->save();
//        return Redirect::back()->withErrors(['Added Successfully', 'The Message']);
        return response()->json(['success'=>'post added successfully']);

    }


    public function create()
    {
        $employees = User::all();
        $projects = EmployeeProject::all();
        return view('admin.reward.addReward')->with(compact('employees', 'projects'));
    }

    public function update(array $data)
    {
        $id = $data['id'];
        $reward = Reward::find($id);
        $reward->cost = $data['cost'];
        $reward->note = $data['note'];
        $reward->employee_id = $data['employee_id'];
        $reward->project_id = $data['project_id'];
        $reward->save();
        return Redirect::back()->withErrors(['Edited Successfully', 'The Message']);

    }

    public function edit($id)
    {

        $reward = Reward::findOrFail($id);
        $projects = Project::all();
        $users = User::all();
        return view('admin.reward.editReward', compact('users', 'projects', 'reward'));

    }


    public function destroy($id)
    {
        $reward = Reward::find($id);
        $reward->destroy($id);
        return Redirect::back();
    }

}
