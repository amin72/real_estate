<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;


class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'آپارتمان',
            'slug' => 'آپارتمان',
            'published' => true
        ]);

        Type::create([
            'name' => 'ویلا',
            'slug' => 'ویلا',
            'published' => true
        ]);

        Type::create([
            'name' => 'تجاری',
            'slug' => 'تجاری',
            'published' => true
        ]);
        
        Type::create([
            'name' => 'اداری',
            'slug' => 'اداری',
            'published' => true
        ]);
    }
}
