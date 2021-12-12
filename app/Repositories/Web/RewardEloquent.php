<?php


namespace App\Repositories\Web;


use App\Models\Reward;
use Illuminate\Support\Facades\Auth;

class RewardEloquent
{
    private $model;

    public function __construct(Reward $reward)
    {
        $this->model = $reward;
    }

    public function index()
    {
        $employee_id = Auth::user()->id;
        $reward = Reward::where('employee_id', $employee_id)->paginate(1);
        return view('layouts.reward')->with(compact('reward'));
    }

}
