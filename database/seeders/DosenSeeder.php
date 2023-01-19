<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->insert([
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 8, 'kouta_pembimbing_2' => 2, 'jabatan_fungsional' => 'lektor kepala', 'nama_lengkap' => 'Amri, SST., MT'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 8, 'kouta_pembimbing_2' => 2, 'jabatan_fungsional' => 'asisten ahli', 'nama_lengkap' => 'Anwar, S.Si., M.Cs'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 8, 'kouta_pembimbing_2' => 2, 'jabatan_fungsional' => 'lektor', 'nama_lengkap' => 'Aswandi, S.Kom., M.Kom.'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 7, 'kouta_pembimbing_2' => 3, 'jabatan_fungsional' => 'lektor', 'nama_lengkap' => 'Atthariq, SST., MT'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 7, 'kouta_pembimbing_2' => 3, 'jabatan_fungsional' => 'lektor', 'nama_lengkap' => 'Hari Toha Hidayat, S.Si., M.Cs'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 8, 'kouta_pembimbing_2' => 2, 'jabatan_fungsional' => 'lektor', 'nama_lengkap' => 'Husaini, S.Si., M.IT'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 8, 'kouta_pembimbing_2' => 2, 'jabatan_fungsional' => 'asisten ahli', 'nama_lengkap' => 'Indrawati, SST., MT'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 8, 'kouta_pembimbing_2' => 2, 'jabatan_fungsional' => 'lektor', 'nama_lengkap' => 'Muhammad Nasir, ST., MT'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 8, 'kouta_pembimbing_2' => 2, 'jabatan_fungsional' => 'lektor', 'nama_lengkap' => 'Mursyidah, MT'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 0, 'kouta_pembimbing_2' => 5, 'jabatan_fungsional' => 'lektor kepala', 'nama_lengkap' => 'Jamilah, Dra., M.Pd.'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 0, 'kouta_pembimbing_2' => 5, 'jabatan_fungsional' => 'asisten ahli', 'nama_lengkap' => 'Mahlil, S.Pd., M.A.'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 0, 'kouta_pembimbing_2' => 10, 'jabatan_fungsional' => 'asisten ahli', 'nama_lengkap' => 'Fachri Yanuar Rudi F, M.T.'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 0, 'kouta_pembimbing_2' => 10, 'jabatan_fungsional' => 'asisten ahli', 'nama_lengkap' => 'Guntur Syahputra, S. Kom., M. Kom.'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 0, 'kouta_pembimbing_2' => 10, 'jabatan_fungsional' => 'asisten ahli', 'nama_lengkap' => 'Ilham Safar, SST., M.Kom'],
            ['created_at' => date('Y-m-d H:i'), 'kouta_pembimbing_1' => 0, 'kouta_pembimbing_2' => 10, 'jabatan_fungsional' => 'asisten ahli', 'nama_lengkap' => 'Safriadi, ST., M.Kom'],
        ]);
    }
}
