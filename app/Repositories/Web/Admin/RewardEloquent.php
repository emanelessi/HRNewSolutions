<?php


namespace App\Repositories\Web\Admin;


use App\Models\Reward;

class RewardEloquent
{
    private $model;

    public function __construct(Reward $reward)
    {
        $this->model = $reward;
    }
}
