<?php

namespace Database\Seeders;

use App\Models\Vaccines;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() 
    {
        $vaccines = [
            ['name' => 'Hepatitis B', 'period' => 0],
            ['name' => 'Hepatitis B', 'period' => 1],
            ['name' => 'Hepatitis B', 'period' => 2],
            ['name' => 'Hepatitis B', 'period' => 6],

            ['name' => 'Polio', 'period' => 0],
            ['name' => 'Polio', 'period' => 2],
            ['name' => 'Polio', 'period' => 3],
            ['name' => 'Polio', 'period' => 4],

            ['name' => 'BCG', 'period' => 1],

            ['name' => 'DTP', 'period' => 2],
            ['name' => 'DTP', 'period' => 3],
            ['name' => 'DTP', 'period' => 4],
            ['name' => 'DTP', 'period' => 18],
            ['name' => 'DTP', 'period' => 60],

            ['name' => 'Hib', 'period' => 2],
            ['name' => 'Hib', 'period' => 3],
            ['name' => 'Hib', 'period' => 4],
            ['name' => 'Hib', 'period' => 18],

            ['name' => 'PCV', 'period' => 2],
            ['name' => 'PCV', 'period' => 4],
            ['name' => 'PCV', 'period' => 6],
            ['name' => 'PCV', 'period' => 12],

            ['name' => 'Rotavirus', 'period' => 2],
            ['name' => 'Rotavirus', 'period' => 4],
            ['name' => 'Rotavirus', 'period' => 6],

            ['name' => 'Influenza', 'period' => 6],
            ['name' => 'Influenza', 'period' => 18],
            ['name' => 'Influenza', 'period' => 30],
            ['name' => 'Influenza', 'period' => 42],
            ['name' => 'Influenza', 'period' => 54],
            ['name' => 'Influenza', 'period' => 66],
            ['name' => 'Influenza', 'period' => 78],
            ['name' => 'Influenza', 'period' => 90],
            ['name' => 'Influenza', 'period' => 102],
            ['name' => 'Influenza', 'period' => 114],
            ['name' => 'Influenza', 'period' => 126],
            ['name' => 'Influenza', 'period' => 138],
            ['name' => 'Influenza', 'period' => 150],
            ['name' => 'Influenza', 'period' => 162],
            ['name' => 'Influenza', 'period' => 174],
            ['name' => 'Influenza', 'period' => 186],
            ['name' => 'Influenza', 'period' => 198],
            ['name' => 'Influenza', 'period' => 210],
            ['name' => 'Influenza', 'period' => 222],

            ['name' => 'MR/MMR', 'period' => 9],
            ['name' => 'MR/MMR', 'period' => 18],
            ['name' => 'MR/MMR', 'period' => 72],
            ['name' => 'MR/MMR', 'period' => 132],

            ['name' => 'JE', 'period' => 10],
            ['name' => 'JE', 'period' => 12],

            ['name' => 'Varisela', 'period' => 12],

            ['name' => 'Hepatitis A', 'period' => 24],
            ['name' => 'Hepatitis A', 'period' => 30],

            ['name' => 'Tifoid', 'period' => 24],
            ['name' => 'Tifoid', 'period' => 60],
            ['name' => 'Tifoid', 'period' => 96],
            ['name' => 'Tifoid', 'period' => 132],
            ['name' => 'Tifoid', 'period' => 168],

            ['name' => 'Dengue', 'period' => 90],
            ['name' => 'Dengue', 'period' => 96],

            ['name' => 'HPV', 'period' => 120],
            ['name' => 'HPV', 'period' => 132],
            ['name' => 'HPV', 'period' => 144],
        ];

        DB::table('vaccine')->insert($vaccines);
    }
}
