<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ManagerInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ManagerInfo::create([
            'name' => 'حسن مرادی',
            'phone' => '02178965412',
            'mobile' => '09389361111',
            'whatsapp' => '09389362222',
            'email' => 'info@realestate.com',
            'instagram' => 'realestate_ig',
            'telegram' => 'realestate_tm',
            'youtube' => 'realestate_youtube',
            'aparat' => 'realestate_aparat',
        ]);
    }
}
