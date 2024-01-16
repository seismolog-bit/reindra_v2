<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ThemeSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++) { 

            $arraykat = [1, 2, 3];

            $array1 = [1, 2];
            $array2 = [4, 5];

            $randomValue1 = $faker->randomElement($array1);
            $randomValue2 = $faker->randomElement($array2);

            Theme::create([
                'title' => $faker->words(3, true),
                'image' => 'images/themes/1705408160.jpg',
                'url' => $faker->url,
                'theme_category' => $faker->randomElement($arraykat),
                'theme_tags' => [$randomValue1, $randomValue2],
                'description' => $faker->text(150),
            ]);
        }
    }
}
