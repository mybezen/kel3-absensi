<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    // Function to list all attendance records
    public function index()
    {
        // Mengambil semua data absensi beserta relasi dengan pegawai
        $absensis = Absensi::with('pegawai')->get();
        return view('absensi.index', compact('absensis'));
    }

    // Function to record an employee's attendance
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|exists:pegawais,id',
            'tanggal_masuk' => 'required|date',
            'jam_masuk' => 'required|date_format:H:i:s',
        ]);

        // Mencatat absensi baru
        Absensi::create($request->all());

        return redirect()->route('absensi.index')->with('success', 'Attendance recorded successfully!');
    }
}
