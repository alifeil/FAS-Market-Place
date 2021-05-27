<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Semen',
            'price' => 50000,
            'image_link' => '/upload/images/a.jpg',
            'description' => 'Semen yang berkualitas',
            'category_id' => 1,
            'status' => 'public'
        ]);
    }
}
