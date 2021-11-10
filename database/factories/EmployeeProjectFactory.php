<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\EmployeeProject;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeProjectFactory extends Factory
{
    protected $model = EmployeeProject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id'=>Employee::factory(),
            'project_id'=>Project::factory(),

        ];
    }
}
