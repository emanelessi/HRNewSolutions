<?php


namespace App\Repositories\Web\Admin;


use App\Models\Job;

class JobEloquent
{
    private $model;

    public function __construct(Job $job)
    {
        $this->model = $job;
    }

}
