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
            'title' => 'Basic',
            'price' => 3500000,
            'description' => '250 Pilihan theme',
        ]);
        Pricing::create([
            'title' => 'Premium',
            'price' => 5750000,
            'description' => '500 Pilihan theme',
            'recommended' => true
        ]);
        Pricing::create([
            'title' => 'Advance',
            'price' => 6430000,
            'description' => '750 Pilihan theme'
        ]);
    }
}
