<?php


namespace App\Repositories\Web\Admin;



use App\Models\Project;

class ProjectEloquent
{
    private $model;

    public function __construct(Project $project)
    {
        $this->model = $project;
    }

}
