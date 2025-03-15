<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            ['name' => 'جامعة الخرطوم', 'code' => 'UK123', 'location' => 'الخرطوم'],
            ['name' => 'جامعة السودان', 'code' => 'SU456', 'location' => 'الخرطوم'],
            ['name' => 'جامعة النيلين', 'code' => 'NU789', 'location' => 'الخرطوم'],
        ]);
    }
}
