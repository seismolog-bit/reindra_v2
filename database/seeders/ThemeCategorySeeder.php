<?php

namespace Database\Seeders;

use App\Models\ThemeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThemeCategory::create([
            'title' => 'Silver'
        ]);
        ThemeCategory::create([
            'title' => 'Gold'
        ]);
        ThemeCategory::create([
            'title' => 'Platinum'
        ]);
    }
}
