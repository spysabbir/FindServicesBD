<?php

namespace Database\Seeders;

use App\Models\MailSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MailSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MailSetting::create([
            'mailer' => 'smtp',
            'host' => 'host',
            'port' => 'port',
            'username' => 'username',
            'password' => 'password',
            'encryption' => 'tls',
            'from_address' => 'info@gmail.com',
        ]);
    }
}
