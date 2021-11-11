<?php

namespace Database\Seeders;

use App\Models\EmployeeProject;
use Illuminate\Database\Seeder;

class EmployeeProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeProject::factory()->times(5)->create();
    }
}
