<?php

namespace Database\Seeders;

use App\Models\JobHistory;
use Illuminate\Database\Seeder;

class JobHistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobHistory::factory()->times(20)->create();
    }
}
