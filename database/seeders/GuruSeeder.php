<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\Models\User;
        $administrator->username = "alex05";
        $administrator->email = "alex05@gmail.com";
        $administrator->password = \Hash::make("alexalex") ;
        $administrator->role = json_encode("GURU");

        $administrator->save();

        $this->command->info("User berhasil diinsert");
    }
}
