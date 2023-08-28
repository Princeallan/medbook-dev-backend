<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->truncate();

        $genders = [
            ['name' => 'Outpatient'],
            ['name' => 'Inpatient'],
        ];

        DB::table('services')->insert($genders);
    }
}
