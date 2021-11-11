<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->text(10),
            'salary'=> rand(1,500),
            'description'=> $this->faker->text(50),
            'manager_id'=> Employee::factory(),
            'members'=> $this->faker->text(30),

        ];
    }
}
