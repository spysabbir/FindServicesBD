<?php

namespace Database\Seeders;

use App\Models\SeoSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SeoSetting::create([
            'title' => 'Find Services BD',
            'keywords' => 'Find Services BD, Find Services, Services BD',
            'author' => 'Md Sabbir Ahammed',
            'description' => 'Find Services BD',
            'seo_image' => 'seo_image.jpg',
        ]);
    }
}
