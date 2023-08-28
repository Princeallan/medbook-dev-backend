<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genders')->truncate();

        $genders = [
            ['name' => 'Male'],
            ['name' => 'Female'],
        ];

        DB::table('genders')->insert($genders);
    }
}
