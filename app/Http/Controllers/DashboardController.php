<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        $dosens = Dosen::all();
        return view('dashboard', [
            'title' => 'Dashboard',
            'jumlah_mahasiswa' => $mahasiswas->count(),
            'jumlah_dosen' => $dosens->count(),
        ]);
    }
}
