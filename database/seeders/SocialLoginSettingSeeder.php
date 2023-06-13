<?php

namespace Database\Seeders;

use App\Models\SocialLoginSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialLoginSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialLoginSetting::create([
            'google_login_status' => 'Inactive',
            'google_client_id' => 'google_client_id',
            'google_client_secret' => 'google_client_secret',
            'facebook_login_status' => 'Inactive',
            'facebook_client_id' => 'facebook_client_id',
            'facebook_client_secret' => 'facebook_client_secret',
        ]);
    }
}
