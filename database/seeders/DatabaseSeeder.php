<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(4)->create();
        $this->call(CategoryTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(ZoneTableSeeder::class);
        
        // \App\Models\Listing::unsetEventDispatcher();
        // \App\Models\Listing::factory(20)->create();
    }
}
