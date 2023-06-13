<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DefaultSettingSeeder::class,
            DistrictSeeder::class,
            DivisionSeeder::class,
            MailSettingSeeder::class,
            SeoSettingSeeder::class,
            SocialLoginSettingSeeder::class,
            UnionSeeder::class,
            UpazilaSeeder::class,
            UserSeeder::class,
        ]);
    }
}
