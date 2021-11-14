<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'=> $this->faker->text(10),
            'last_name'=> $this->faker->text(10),
            'email'=>  $this->faker->unique()->safeEmail(),
            'password' => bcrypt('123456'),
            'phone_number'=> rand(1,10),
            'hire_date'=>  $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'salary'=> rand(1,500),
            'photo' =>$this->faker->imageUrl(400, 300),
            'job_id'=> Job::factory(),
            'department_id'=> Department::factory(),
//            'manager_id'=> Employee::factory(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
