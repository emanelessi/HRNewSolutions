<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\File;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $filepath = storage_path('avatars');

            if(!\Illuminate\Support\Facades\File::exists($filepath)){
                \Illuminate\Support\Facades\File::makeDirectory($filepath);
            }
        return [
            'first_name'=> $this->faker->text(10),
            'last_name'=> $this->faker->text(10),
            'email'=>  $this->faker->unique()->safeEmail(),
            'phone_number'=> rand(1,10),
            'hire_date'=>  $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'salary'=> rand(1,500),
            'photo' =>$this->faker->imageUrl(400, 300),
            'manager_id'=> rand(1,100),
            'job_id'=> Job::factory(),

        ];

    }
}
