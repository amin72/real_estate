<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price;


class PriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::create([
            'amount' => 500000000,
            'published' => true
        ]);

        Price::create([
            'amount' => 600000000,
            'published' => true
        ]);

        Price::create([
            'amount' => 700000000,
            'published' => true
        ]);

        Price::create([
            'amount' => 800000000,
            'published' => true
        ]);

        Price::create([
            'amount' => 900000000,
            'published' => true
        ]);

        Price::create([
            'amount' => 1000000000,
            'published' => true
        ]);

        Price::create([
            'amount' => 1200000000,
            'published' => true
        ]);

        Price::create([
            'amount' => 1400000000,
            'published' => true
        ]);
        
        Price::create([
            'amount' => 1600000000,
            'published' => true
        ]);

        Price::create([
            'amount' => 1800000000,
            'published' => true
        ]);
        
        Price::create([
            'amount' => 2000000000,
            'published' => true
        ]);
    }
}
