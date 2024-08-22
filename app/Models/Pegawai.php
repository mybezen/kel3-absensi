<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'NIP', 'nm_pegawai', 'jk', 'status',
    ];

    // Relasi One-to-Many ke model Absensi
    public function absensis()
    {
        return $this->hasMany(Absensi::class, 'id_user');
    }

    // Relasi One-to-Many ke model Laporan
    public function laporans()
    {
        return $this->hasMany(Laporan::class, 'id_user');
    }
}
