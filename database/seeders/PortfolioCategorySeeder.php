<?php

namespace Database\Seeders;

use App\Models\PortfolioCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PortfolioCategory::create([
            'title' => 'Website'
        ]);
        PortfolioCategory::create([
            'title' => 'Mobile'
        ]);
        PortfolioCategory::create([
            'title' => 'Design Graphics'
        ]);
    }
}
