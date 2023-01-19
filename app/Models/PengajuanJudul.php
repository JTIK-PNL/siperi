<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanJudul extends Model
{
    use HasFactory;
    protected $fillable = [
        'mahasiswa_id',
        'judul_1',
        'judul_2',
        'judul_3',
        'referensi_1',
        'referensi_2',
        'referensi_3',
        'dosen_pembimbing_1',
        'dosen_pembimbing_2',
        'status',
        'catatan',
        'user_id',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function dosen_pembimbing_1st()
    {
        return $this->belongsTo(Dosen::class, 'dosen_pembimbing_1');
    }

    public function dosen_pembimbing_2nd()
    {
        return $this->belongsTo(Dosen::class, 'dosen_pembimbing_2');
    }
}

