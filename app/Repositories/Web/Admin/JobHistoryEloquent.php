<?php


namespace App\Repositories\Web\Admin;


use App\Models\JobHistory;

class JobHistoryEloquent
{
    private $model;

    public function __construct(JobHistory $jobHistory)
    {
        $this->model = $jobHistory;
    }
}
