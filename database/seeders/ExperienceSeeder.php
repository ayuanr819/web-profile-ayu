<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $experiences = [
        [
            'organization' => 'Badan Eksekutif Mahasiswa',
            'role' => 'Koordinator Kementerian Sosial dan Masyarakat',
            'description' => 'Bertanggung jawab dalam mengkoordinasikan anggota dalam merancang serta melaksanakan program kerja tahunan.',
        ],
        [
            'organization' => 'Magang',
            'role' => 'PT Indonesia',
            'description' => 'Pemenuhan mata kuliah Praktik Kerja Lapangan (PKL).',
        ],
        [
            'organization' => 'Creative Management',
            'role' => 'Hestii Henna Sragen',
            'description' => 'Mengelola katalog digital dan layanan jasa henna dengan sentuhan teknologi informasi.',
        ],
    ];

    foreach ($experiences as $exp) {
        \App\Models\Experience::create($exp);
    }
    }
}
