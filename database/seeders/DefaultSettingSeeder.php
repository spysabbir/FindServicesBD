<?php

namespace Database\Seeders;

use App\Models\DefaultSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DefaultSetting::create([
            'app_name' => 'Find Services BD',
            'main_phone' => '01878136530',
            'support_phone' => '01878136530',
            'main_email' => 'info@email.com',
            'support_email' => 'info@email.com',
            'address' => 'Dhaka, Bangladesh',
            'app_url' => 'http://127.0.0.1:8000',
            'time_zone' => 'UTC',
            'favicon' => 'default_favicon.png',
            'logo' => 'default_logo.png',
        ]);
    }
}
