<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use App\Repositories\Web\RewardEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RewardsController extends Controller
{
    public function __construct(RewardEloquent $RewardEloquent)
    {
        $this->reward = $RewardEloquent;
    }
    public function index()
    {
        return $this->reward->index();

    }


}
