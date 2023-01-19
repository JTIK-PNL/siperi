<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanJudul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PengajuanJudulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswas = DB::table('mahasiswas')->select('id', 'nim', 'nama')->whereNotIn('id', function ($query) {
            $query->select('mahasiswa_id')->from('pengajuan_juduls');
        })->orderBy('nama')->get();
        $dosen_pembimbing_1 = Dosen::orderBy('nama_lengkap', 'asc')->get();
        $dosen_pembimbing_2 = Dosen::orderBy('nama_lengkap', 'asc')->get();
        return view('pengajuan-judul.create', [
            'title' => 'Pengajuan Judul',
            'mahasiswas' => $mahasiswas,
            'dosen_pembimbing_1' => $dosen_pembimbing_1,
            'dosen_pembimbing_2' => $dosen_pembimbing_2,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $rules = [
            'mahasiswa_id' => 'required|not_in:0',
            'judul_1' => 'required',
            'referensi_1' => 'required',
            'dosen_pembimbing_1' => 'required|not_in:0',
            'dosen_pembimbing_2' => 'required|not_in:0|different:dosen_pembimbing_1',
        ];
        $messages = [
            'required' => ':attributes harus dipilih',
            'not_in' => ':attributes harus dipilih',
            'dosen_pembimbing_2.different' => 'Dosen Pembimbing Kedua harus berbeda dengan Dosen Pembimbing Pertama',
        ];
        $attributes = [
            'mahasiswa_id' => 'Mahasiswa',
            'dosen_pembimbing_1' => 'Dosen Pembimbing Pertama',
            'dosen_pembimbing_2' => 'Dosen Pembimbing Kedua',
        ];
        $validator = Validator::make($data, $rules, $messages, $attributes);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            PengajuanJudul::create($data);
            Alert::success('Berhasil', 'Data berhasil disimpan');
            return redirect()->route('rekap-pengajuan-judul');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengajuanJudul  $pengajuanJudul
     * @return \Illuminate\Http\Response
     */
    public function show(PengajuanJudul $pengajuanJudul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengajuanJudul  $pengajuanJudul
     * @return \Illuminate\Http\Response
     */
    public function edit(PengajuanJudul $pengajuanJudul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengajuanJudul  $pengajuanJudul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengajuanJudul $pengajuanJudul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengajuanJudul  $pengajuanJudul
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengajuanJudul $pengajuanJudul)
    {
        //
    }

    public function rekap()
    {
        return view('pengajuan-judul.rekap', [
            'title' => 'Rekap Pengajuan Judul',
            'pengajuan_juduls' => PengajuanJudul::orderBy('id', 'desc')->get(),
        ]);
    }
}
