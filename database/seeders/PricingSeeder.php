<?php

namespace Database\Seeders;

use App\Models\Pricing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pricing::create([
            'title' => 'Silver',
            'price' => 4499000,
            'description' => '250 Pilihan theme',
        ]);
        Pricing::create([
            'title' => 'Gold',
            'price' => 7750000,
            'description' => '500 Pilihan theme',
            'recommended' => true
        ]);
        Pricing::create([
            'title' => 'Platinum',
            'price' => 10500000,
            'description' => '750 Pilihan theme'
        ]);
    }
}
