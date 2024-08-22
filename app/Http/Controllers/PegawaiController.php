<?php

// app/Http/Controllers/PegawaiController.php
namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // Function to list all employees
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    // Function to show the form for creating a new employee
    public function create()
    {
        return view('pegawai.create');
    }

    // Function to store a new employee in the database
    public function store(Request $request)
    {
        $request->validate([
            'NIP' => 'required|unique:pegawais',
            'nm_pegawai' => 'required',
            'jk' => 'required',
            'status' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Employee created successfully!');
    }
}
