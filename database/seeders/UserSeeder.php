<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'siperi@muhdavi.com';
        $user->password = Hash::make('siperi2019');
        $user->role = 'admin';
        $user->unit_kerja_id = null;
        $user->save();

        $user = new User;
        $user->name = 'Ketua Jurusan';
        $user->email = 'jurusan@siperi.com';
        $user->password = Hash::make('jurusan2019');
        $user->role = 'jurusan';
        $user->unit_kerja_id = 1;
        $user->save();

        $user = new User;
        $user->name = 'Ketua Prodi';
        $user->email = 'prodi@siperi.com';
        $user->password = Hash::make('prodi2019');
        $user->role = 'prodi';
        $user->unit_kerja_id = 3;
        $user->save();

        $user = new User;
        $user->name = 'Dosen';
        $user->email = 'dosen@siperi.com';
        $user->password = Hash::make('dosen2019');
        $user->role = 'dosen';
        $user->unit_kerja_id = 3;
        $user->save();

        $user = new User;
        $user->name = 'Mahasiswa';
        $user->email = 'trkj@siperi.com';
        $user->password = Hash::make('trkj2019');
        $user->role = 'mahasiswa';
        $user->unit_kerja_id = null;
        $user->save();
    }
}
