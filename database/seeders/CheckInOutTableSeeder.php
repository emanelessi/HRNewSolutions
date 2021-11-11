<?php

namespace Database\Seeders;

use App\Models\CheckInOut;
use Illuminate\Database\Seeder;

class CheckInOutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CheckInOut::factory()->times(20)->create();
    }
}
