<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $var = new \App\Category;
        $var->name = "Beach";
        $var->save();

        $var = new \App\Category;
        $var->name = "Mountain";
        $var->save();

        $var = new \App\Category;
        $var->name = "Candi";
        $var->save();
    }
}
