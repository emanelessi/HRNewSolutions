<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\File;
use Illuminate\Support\Str;

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
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone_number'=> rand(1,10),
            'hire_date'=>  $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'salary'=> rand(1,500),
            'photo' =>$this->faker->imageUrl(400, 300),
            'job_id'=> Job::factory(),
            'manager_id'=> Employee::factory(),
            'remember_token' => Str::random(10),


        ];

    }
}
