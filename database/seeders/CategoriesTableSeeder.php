<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Semen'
        ]);

        DB::table('categories')->insert([
            'name' => 'Pasir'
        ]);

        DB::table('categories')->insert([
            'name' => 'Kayu'
        ]);
        DB::table('categories')->insert([
            'name' => 'Batu'
        ]);
    }
}
