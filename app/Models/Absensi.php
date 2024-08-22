<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $fillable = [
        'id_user', 'tanggal_masuk', 'jam_masuk', 'jam_keluar', 'tanggal_masuk', 'tanggal_keluar'
    ];

    // Relasi Many-to-One ke model Pegawai
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_user');
    }
}
