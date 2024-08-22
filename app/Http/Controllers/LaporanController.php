<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Function to list all reports
    public function index()
    {
        // Mengambil semua laporan beserta relasi dengan pegawai
        $laporans = Laporan::with('pegawai')->get();
        return view('laporan.index', compact('laporans'));
    }

    // Function to generate a report based on certain criteria
    public function cetak(Request $request)
    {
        $request->validate([
            'tahun' => 'required|integer',
            'tanggal' => 'required|date',
        ]);

        // Mengambil laporan berdasarkan tahun dan tanggal yang dipilih
        $laporans = Laporan::where('tahun', $request->tahun)
                            ->where('tanggal', $request->tanggal)
                            ->get();

        return view('laporan.cetak', compact('laporans'));
    }
}
