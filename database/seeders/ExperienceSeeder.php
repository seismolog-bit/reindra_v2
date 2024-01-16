<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::create([
            'title' => 'Irit.io',
            'type' => 'Work',
            'description' => 'Worked as mobile and website development',
            'start_year' => '2018-07-28',
            'end_year' => '2020-12-31',
        ]);
        Experience::create([
            'title' => 'PT Besar Intan Gemilang',
            'type' => 'Work',
            'description' => 'Worked as a website developer and as an office administrator',
            'start_year' => '2022-07-27',
        ]);
        Experience::create([
            'title' => 'University of Muhammadiyah Malang',
            'type' => 'Education',
            'description' => 'Sebagai mahasiswa Teknik Informatika',
            'start_year' => '2012-07-27',
            'end_year' => '2019-07-27',
        ]);
    }
}
