@extends('layouts.main')

@section('section')

<div class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md mx-auto p-4">
        <div class="relative">
            <button class="absolute left-0 top-0 mt-1 ml-1 text-gray-600 hover:text-gray-800">
                <!-- Replace with an appropriate back icon if necessary -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <h1 class="text-lg font-semibold text-center mb-4">Jadwal</h1>
        </div>
        <h2 class="text-lg font-semibold mb-2 text-green-700">Today</h2>
        <div class="space-y-4">
            <div class="bg-green-100 p-4 rounded-lg shadow">
                <p class="font-semibold">07.00 - 09.00</p>
                <p>Pekerjaan Awal: Cek email, rapat pagi, dan perencanaan tugas.</p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow">
                <p class="font-semibold">09.00 - 10.00</p>
                <p>Pekerjaan Fokus: Menyelesaikan tugas-tugas utama yang memerlukan konsentrasi tinggi.</p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow">
                <p class="font-semibold">10.00 - 10.15</p>
                <p>Istirahat Singkat: Waktu istirahat untuk kopi atau snack ringan.</p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow">
                <p class="font-semibold">10.15 - 12.00</p>
                <p>Pekerjaan Proyek: Melanjutkan tugas atau proyek yang sedang dikerjakan.</p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow">
                <p class="font-semibold">12.00 - 13.00</p>
                <p>Makan Siang: Istirahat makan siang.</p>
            </div>
        </div>
    </div>
</div>

@endsection
