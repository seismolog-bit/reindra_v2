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
            'description' => 'Bekerja mulai tahun 2018',
            'start_year' => '2018-08-27',
            'end_year' => '2020-12-31',
        ]);
        Experience::create([
            'title' => 'PT Besar Intan Gemilang',
            'type' => 'Work',
            'description' => 'Bekerja mulai tahun 2022',
            'start_year' => '2022-07-27',
        ]);
        Experience::create([
            'title' => 'University of Muhammadiyah Malang',
            'type' => 'School',
            'description' => 'Sebagai mahasiswa Teknik Informatika',
            'start_year' => '2012-07-27',
            'end_year' => '2019-07-27',
        ]);
    }
}
