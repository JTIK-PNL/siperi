<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2018', 'nim' => '1890343035', 'nama' => 'MIZWAR HADINATA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2018', 'nim' => '1890343070', 'nama' => 'CUT FATIA ZAMIRA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343001', 'nama' => 'ASRI NANDA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343002', 'nama' => 'DINDA AULIA THOSI SEGARA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343003', 'nama' => 'M. RIZKY SYAHPUTRA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343004', 'nama' => 'M. ARIQ FIRJATULLAH'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343005', 'nama' => 'PRASETIO'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343006', 'nama' => 'RETNO WULANDARI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343008', 'nama' => 'RAHAYU MAHBENGI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343009', 'nama' => 'NURHALIMATUN SA\'DIAH'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343010', 'nama' => 'ISMAYRA ZULMI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343012', 'nama' => 'MUHAMMAD FARHAN'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343014', 'nama' => 'FURQAN SIDDIQ'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343015', 'nama' => 'TIA VARISHA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343016', 'nama' => 'NURUL FADILAH'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343017', 'nama' => 'REZA RISKI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343018', 'nama' => 'TIARA GEUBRINA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343019', 'nama' => 'AIDA MUTIA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343020', 'nama' => 'AINA FADILA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343021', 'nama' => 'ALDI FERDIAN'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343022', 'nama' => 'ALLISSA MUNANDA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343023', 'nama' => 'FAIZ AIMAN FAJRIRRAHMAN'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343024', 'nama' => 'FARA YUNITA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343025', 'nama' => 'FAUZAN ROZY LUBIS'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343026', 'nama' => 'FINNY FEBILA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343027', 'nama' => 'KHAIRUL AZMI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343028', 'nama' => 'MOHD.RAJA FIRDAUS'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343029', 'nama' => 'MUHAMMAD AFRINZA RAMADHANA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343030', 'nama' => 'MUHAMMAD CHALIL FARHAN'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343031', 'nama' => 'MUHAMMAD RIDHA ASY\'QARI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343032', 'nama' => 'MUHAMMAD ZAINI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343033', 'nama' => 'MULIAWATI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343034', 'nama' => 'NURHAYATI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343035', 'nama' => 'PUTRI NAZILA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343036', 'nama' => 'RAHUL DEVNANZAR NZ'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343038', 'nama' => 'MUHAMMAD IRFAN'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343039', 'nama' => 'MUHAMMAD FARIHAN AULIA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343040', 'nama' => 'MUHAMMAD RIZKY KURNIAWAN BAKRI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343041', 'nama' => 'MUHAMMAD FATAHILLAH'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343042', 'nama' => 'MUHAMMAD ALFI FADHRULSYAH'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343044', 'nama' => 'SULTAN ZAQI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343045', 'nama' => 'MUHAMMAD HARIS'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343046', 'nama' => 'RIFKI RIFANI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343047', 'nama' => 'RAIHAN MAULIDA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343048', 'nama' => 'MUHAMMAD RAMZI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343049', 'nama' => 'LUTHFIA RISKA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343050', 'nama' => 'MUHAMMAD . RIZKY'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343052', 'nama' => 'SHAFIYYAH HANIFAH'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343053', 'nama' => 'ZIKRA AFNADI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343054', 'nama' => 'JUWANDA AZI MAYUSWA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343055', 'nama' => 'AMIR AZHARI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343056', 'nama' => 'FIRA FADILAH'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343057', 'nama' => 'M REZA FAHLEVI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343058', 'nama' => 'ACHMAD YANIS'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343059', 'nama' => 'DIO WANDANA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343060', 'nama' => 'NOVI ADITIA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343061', 'nama' => 'MUHAMMAD ANENTA HIDAYAT'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343062', 'nama' => 'FAUZAN ZIKRA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343063', 'nama' => 'MUHAMMAD YUHAL FATA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343064', 'nama' => 'AHLUL MUKHRAMIN'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343065', 'nama' => 'RISMA ARIFA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343066', 'nama' => 'KERRYNA DWI ANDARIA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343068', 'nama' => 'KHAIRUNNISA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343069', 'nama' => 'SALWA PRILYA BALQIS'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343070', 'nama' => 'MUJIBBULLAH'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343071', 'nama' => 'TELMA MUNIRA'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343072', 'nama' => 'M . SURYA KHADAFI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343073', 'nama' => 'MUHAMMAD RIZKI AFRIZAL'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343074', 'nama' => 'MUHAMMAD ZIKRI'],
            ['created_at' => date('Y-m-d H:i'), 'angkatan' => '2019', 'nim' => '1990343075', 'nama' => 'MUHHABBIR CHAWASH'],
        ]);
    }
}
