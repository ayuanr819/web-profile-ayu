<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationHistorySeeder extends Seeder
{
    public function run()
    {
        $this->call([
        SkillSeeder::class,
        ExperienceSeeder::class,
        EducationHistorySeeder::class, 
    ]);
        DB::table('education_histories')->insert([
            [
                'school_name' => 'Politeknik Indonusa Surakarta',
                'degree' => 'Teknologi Rekayasa Perangkat Lunak',
                'start_year' => 2024,
                'end_year' => 2028,
            ],
            [
                'school_name' => 'SMA N 3 SUKOHARJO',
                'degree' => 'Peminatan Matematika dan Ilmu Pengetahuan Alam',
                'start_year' => 2021,
                'end_year' => 2024,
            ],
            [
                'school_name' => 'SMP N 2 SUKOHARJO',
                'degree' => 'Sekolah Menengah Pertama',
                'start_year' => 2018,
                'end_year' => 2021,
            ],
            [
                'school_name' => 'SD N KRIWEN 01',
                'degree' => 'Sekolah Dasar',
                'start_year' => 2012,
                'end_year' => 2018,
            ],
            [
                'school_name' => 'BA AISYIAH KRIWEN 03',
                'degree' => 'Taman Kanak-Kanak',
                'start_year' => 2012,
                'end_year' => 2010,
            ],
            
        ]);
    }
}

        

