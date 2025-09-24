<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faculty;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faculty::create(['name' => 'Fakultas Informatika dan Teknik Elektro (FITE)']);
        Faculty::create(['name' => 'Fakultas Vokasi']);
        Faculty::create(['name' => 'Fakultas Teknik Industri (FTI)']);
        Faculty::create(['name' => 'Fakultas Bioteknologi (FB)']);
    }
}
