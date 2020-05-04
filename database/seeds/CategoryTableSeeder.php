<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'iMac',
            'code' => 'imac',
        ]);

        Category::create([
            'name' => 'MacBook',
            'code' => 'macbook',
        ]);

        Category::create([
            'name' => 'iPad',
            'code' => 'ipad',
        ]);

        Category::create([
            'name' => 'iPhone',
            'code' => 'iphone',
        ]);

        Category::create([
            'name' => 'Watch',
            'code' => 'watch',
        ]);

        Category::create([
            'name' => 'TV',
            'code' => 'tv',
        ]);

        Category::create([
            'name' => 'AirPods',
            'code' => 'airpods',
        ]);
    }
}
