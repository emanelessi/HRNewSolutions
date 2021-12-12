<?php


namespace App\Repositories\Web\Admin;


use App\Models\CheckInOut;

class CheckEloquent
{
    private $model;

    public function __construct(CheckInOut $checkInOut)
    {
        $this->model = $checkInOut;
    }

}
