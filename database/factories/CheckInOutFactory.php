<?php

namespace Database\Factories;

use App\Models\CheckInOut;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CheckInOutFactory extends Factory
{
    protected $model = CheckInOut::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'time'=>  $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),

            'employee_id'=>Employee::factory(),
        ];
    }
}
