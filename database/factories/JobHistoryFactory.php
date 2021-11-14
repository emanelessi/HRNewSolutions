<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Job;
use App\Models\JobHistory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobHistoryFactory extends Factory
{
    protected $model = JobHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'start_date'=>  $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'end_date'=>  $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'employee_id'=> User::factory(),
            'job_id'=>Job::factory(),
            'department_id'=>Department::factory(),

        ];
    }
}
