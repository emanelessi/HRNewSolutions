<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Project;
use App\Models\Reward;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RewardFactory extends Factory
{
    protected $model = Reward::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cost'=> rand(1,500),
            'note'=> $this->faker->text(200),
            'employee_id'=>User::factory(),
            'project_id'=>Project::factory(),
        ];
    }
}
