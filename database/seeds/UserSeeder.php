<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $var = new \App\User;
        $var->name = "Darwis Johan";
        $var->email = "darwis@gmail.com";
        $var->phone = "0812291312";
        $var->role = "Admin";
        $var->password = Hash::make("Darwis");
        $var->save();

        $var = new \App\User;
        $var->name = "Darwis Johan";
        $var->email = "darwis1@gmail.com";
        $var->phone = "0812291312";
        $var->role = "User";
        $var->password = Hash::make("Darwis");
        $var->save();

        $var = new \App\User;
        $var->name = "Johan";
        $var->email = "darwis2@gmail.com";
        $var->phone = "0812291312";
        $var->role = "User";
        $var->password = Hash::make("Darwis");
        $var->save();

        $var = new \App\User;
        $var->name = "Darwis";
        $var->email = "darwis3@gmail.com";
        $var->phone = "0812291312";
        $var->role = "User";
        $var->password = Hash::make("Darwis");
        $var->save();
    }
}
