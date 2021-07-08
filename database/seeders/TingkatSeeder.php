<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TingkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tingkat')->insert([
            'id' => 1,
            'tingkat' => 'Elementary',
        ]);
        DB::table('tingkat')->insert([
            'id' => 2,
            'tingkat' => 'Intermediate',
        ]);
        DB::table('tingkat')->insert([
            'id' => 3,
            'tingkat' => 'Advance',
        ]);
        DB::table('tingkat')->insert([
            'id' => 4,
            'tingkat' => 'Ula',
        ]);
        DB::table('tingkat')->insert([
            'id' => 5,
            'tingkat' => 'Wustho',
        ]);
        DB::table('tingkat')->insert([
            'id' => 6,
            'tingkat' => 'Ulya',
        ]);
    }
}
