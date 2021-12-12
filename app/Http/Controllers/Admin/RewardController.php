<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\editRewardRequest;
use App\Http\Requests\Employee\ProfileRequest;
use App\Http\Requests\Employee\rewardRequest;
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
        return $this->reward->index();
    }

    public function addReward(rewardRequest $request)
    {
        return $this->reward->addReward($request->all());
    }

    public function create()
    {
        return $this->reward->create();
    }

    public function update(editRewardRequest $request)
    {
        return $this->reward->update($request->all());
    }

    public function edit($id)
    {
        return $this->reward->edit($id);
    }


    public function destroy($id)
    {
        return $this->reward->destroy($id);
    }

}
