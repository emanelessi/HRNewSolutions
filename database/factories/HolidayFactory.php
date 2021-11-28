<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Holiday;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class HolidayFactory extends Factory
{
    protected $model = Holiday::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'duration'=>rand(1,25),
            'description'=> $this->faker->text(10),
            'date'=> $this->faker->date(),
            'type'=> $this->faker->randomElement(['Sick holiday','annual holiday','Official holiday','Marriage holiday','condolence holiday','for an hour','New Years Eve','Israa and meraaj','Prophets Birthday','Labor Day','Eid al-Fitr','Eid al-Adha','Islamic New Year','Independence Day','Christmas']),
            'status'=> $this->faker->randomElement(['pending', 'approve', 'rejected']),
            'employee_id'=>User::factory(),

        ];
    }
}
