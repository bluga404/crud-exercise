<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Major;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Major::create(['name' => 'Informatika']);
        Major::create(['name' => 'Sistem Informasi']);
        Major::create(['name' => 'Teknik Elektro']);
        Major::create(['name' => 'Teknologi Informasi']);
        Major::create(['name' => 'Teknologi Komputer']);
        Major::create(['name' => 'Teknologi Rekayasa Perangkat Lunak']);
        Major::create(['name' => 'Manajemen Rekayasa']);
        Major::create(['name' => 'Teknik Metalurgi']);
        Major::create(['name' => 'Teknik Bioproses']);
        Major::create(['name' => 'Teknik Bioinformatika']);
    }
}
