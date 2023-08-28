<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patients')->truncate();

        $genders = [
            ['name' => 'Kevin Brown', 'date_of_birth' => Carbon::createFromFormat('d/m/Y', '15/01/1993')->format('Y-m-d'), 'gender_id' => 1],
            ['name' => 'Leah Gitonga', 'date_of_birth' => Carbon::createFromFormat('d/m/Y', '26/07/1989')->format('Y-m-d'), 'gender_id' => 2]
        ];

        DB::table('patients')->insert($genders);
    }
}
