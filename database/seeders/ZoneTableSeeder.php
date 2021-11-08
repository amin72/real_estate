<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zone;


class ZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zone::create([
            'name' => 'منطقه یک',
            'published' => true
        ]);

        Zone::create([
            'name' => 'منطقه دو',
            'published' => true
        ]);

        Zone::create([
            'name' => 'منطقه سه',
            'published' => true
        ]);

        Zone::create([
            'name' => 'منطقه چهار',
            'published' => true
        ]);

        Zone::create([
            'name' => 'منطقه پنچ',
            'published' => true
        ]);
    }
}
