<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
        'id_user', 'tahun', 'tanggal'
    ];

    // Relasi Many-to-One ke model Pegawai
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_user');
    }
}
