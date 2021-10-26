<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


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
            'name' => 'فروشی',
            'slug' => 'فروشی',
            'published' => true
        ]);

        Category::create([
            'name' => 'اجاره',
            'slug' => 'اجاره',
            'published' => true
        ]);

        Category::create([
            'name' => 'رهن',
            'slug' => 'رهن',
            'published' => true
        ]);
    }
}
