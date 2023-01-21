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
        $mahasiswas = DB::table('mahasiswas')
            ->select('id', 'nim', 'nama')
            ->whereNotIn('id', function ($query) {
                $query->select('mahasiswa_id')->from('pengajuan_juduls');
            })->orderBy('nama')->get();
        $dosen_pembimbing_1 = DB::table('dosens')
            ->select('id', 'nama_lengkap')
            ->whereNot('kouta_pembimbing_1', '<=', function ($query) {
                $query->select(DB::raw('count(*)'))->from('pengajuan_juduls')->where('dosen_pembimbing_1', '=', DB::raw('dosens.id'));
            })->orderBy('nama_lengkap')->get();
        $dosen_pembimbing_2 = DB::table('dosens')
            ->select('id', 'nama_lengkap')
            ->whereNot('kouta_pembimbing_2', '<=', function ($query){
                $query->select(DB::raw('count(*)'))->from('pengajuan_juduls')->where('dosen_pembimbing_2', '=', DB::raw('dosens.id'));
            })->orderBy('nama_lengkap')->get();
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
            return redirect()->route('pengajuan-judul.rekap');
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
        if (request()->ajax()) {
            $pengajuan_juduls = PengajuanJudul::orderBy('created_at', 'desc')->get();
            return datatables()->of($pengajuan_juduls)
                ->addIndexColumn()
                ->addColumn('nim', function ($data) {
                    return $data->mahasiswa->nim;
                })
                ->addColumn('nama', function ($data) {
                    return $data->mahasiswa->nama;
                })
                ->addColumn('dosen_pembimbing_1st', function ($data) {
                    return $data->dosen_pembimbing_1st->nama_lengkap;
                })
                ->addColumn('dosen_pembimbing_2nd', function ($data) {
                    return $data->dosen_pembimbing_2nd->nama_lengkap;
                })
                ->editColumn('status', function ($data) {
                    if ($data->status == 'diajukan') {
                        return '<span class="uppercase badge badge-pill badge-warning">Diajukan</span>';
                    } elseif ($data->status == 'diterima') {
                        return '<span class="uppercase badge badge-pill badge-success">Diterima</span>';
                    } elseif ($data->status == 'ditolak') {
                        return '<span class="uppercase badge badge-pill badge-danger">Ditolak</span>';
                    }
                })
                ->escapeColumns([true])
                ->make(true);
        }
        return view('pengajuan-judul.rekap', [
            'title' => 'Rekap Pengajuan Judul',
        ]);
    }
}
