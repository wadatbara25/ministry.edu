<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'unid' => 1001,
                'n1' => 'محمد',
                'n2' => 'أحمد',
                'n3' => 'عثمان',
                'n4' => 'عبدالله',
                'school' => 'مدرسة الخرطوم الثانوية',
                'code' => 101,
                'depetname' => 'علوم الحاسوب',
                'college' => 'كلية الهندسة',
                'addtype' => 'عام',
                'wlaaee' => 'ولائي',
                'addyear' => 2023,
                'degree' => 'بكالوريوس',
                'Reg' => true,
                'university_id' => 1 // جامعة الخرطوم
            ],
            [
                'unid' => 1002,
                'n1' => 'سعاد',
                'n2' => 'إبراهيم',
                'n3' => 'محمد',
                'n4' => 'علي',
                'school' => 'مدرسة أمدرمان الثانوية',
                'code' => 102,
                'depetname' => 'الطب',
                'college' => 'كلية الطب',
                'addtype' => 'خاص',
                'wlaaee' => 'عام',
                'addyear' => 2023,
                'degree' => 'بكالوريوس',
                'Reg' => false,
                'university_id' => 2 // جامعة السودان
            ]
        ]);
    }
}
