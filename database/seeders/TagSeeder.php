<?php

namespace Database\Seeders;

use App\Models\ThemeTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThemeTag::create([
            'title' => 'Personal'
        ]);
        ThemeTag::create([
            'title' => 'Corporate'
        ]);
        ThemeTag::create([
            'title' => 'Magazine'
        ]);
        ThemeTag::create([
            'title' => 'E-Commerce'
        ]);
    }
}
