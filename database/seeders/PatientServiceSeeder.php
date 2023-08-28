<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patient_services')->truncate();

        $genders = [
            ['patient_id' => 1, 'service_id'=>1, 'comment' => "First time"],
            ['patient_id' => 2, 'service_id' =>2, 'comment' => "First time"]
        ];

        DB::table('patient_services')->insert($genders);
    }
}
