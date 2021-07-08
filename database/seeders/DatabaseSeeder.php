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
        $this->call(StudentSeeder::class);
        $this->call(DaySeeder::class);
        $this->call(KehadiranSeeder::class);
        $this->call(TingkatSeeder::class);
    }
}
