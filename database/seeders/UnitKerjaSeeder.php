<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_kerjas')->insert([
            ['unit_kerja' => 'Jurusan Teknologi Informasi dan Komputer'],
            ['unit_kerja' => 'Teknik Informatika'],
            ['unit_kerja' => 'Teknologi Rekayasa Komputer Jaringan'],
            ['unit_kerja' => 'Teknologi Rekayasa Multimedia'],
        ]);
    }
}
