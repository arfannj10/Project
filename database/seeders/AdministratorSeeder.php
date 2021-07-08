<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\Models\User;
        $administrator->username = "arfannj10";
        $administrator->email = "arfannj10@gmail.com";
        $administrator->password = \Hash::make("arfanalex") ;
        $administrator->role = json_encode("ADMIN");

        $administrator->save();

        $this->command->info("User berhasil diinsert");

    }
}
