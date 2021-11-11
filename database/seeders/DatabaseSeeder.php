<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmployeeTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(CheckInOutTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(EmployeeProjectTableSeeder::class);
        $this->call(HolidayTableSeeder::class);
        $this->call(JobHistoryTableSeeder::class);
        $this->call(JobTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(RewardTableSeeder::class);
    }
}
