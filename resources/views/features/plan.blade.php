@extends('layouts.main')

@section('section')

    <div class="bg-white h-screen flex flex-col items-center">
        <div class="w-full max-w-sm px-4 py-6"> <!-- Header -->
            <div class="flex items-center space-x-4">
                <a href="/home">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <h1 class="text-xl text-center font-bold text-[#686D57]">Jadwal</h1>
            </div> <!-- Today Label -->
            <div class="mt-6">
                <h2 class="text-lg font-bold text-[#686D57]">Today</h2>
            </div> <!-- Schedule Items -->
            <div class="mt-4 space-y-4"> <!-- Schedule Item 1 -->
                <div class="bg-[#E0E5B6] p-4 rounded-xl">
                    <h3 class="text-sm font-bold text-[#686D57]">07.00 - 09.00</h3>
                    <p class="text-[#686D57] text-sm mt-1">Pekerjaan Awal: Cek email, rapat pagi, dan perencanaan tugas.</p>
                </div> <!-- Schedule Item 2 -->
                <div class="bg-[#E0E5B6] p-4 rounded-xl">
                    <h3 class="text-sm font-bold text-[#686D57]">09.00 - 10.00</h3>
                    <p class="text-[#686D57] text-sm mt-1">Pekerjaan Fokus: Menyelesaikan tugas-tugas utama yang memerlukan
                        konsentrasi tinggi.</p>
                </div> <!-- Schedule Item 3 -->
                <div class="bg-[#E0E5B6] p-4 rounded-xl">
                    <h3 class="text-sm font-bold text-[#686D57]">10.00 - 10.15</h3>
                    <p class="text-[#686D57] text-sm mt-1">Istirahat Singkat: Waktu istirahat untuk kopi atau snack ringan.
                    </p>
                </div> <!-- Schedule Item 4 -->
                <div class="bg-[#E0E5B6] p-4 rounded-xl">
                    <h3 class="text-sm font-bold text-[#686D57]">10.15 - 12.00</h3>
                    <p class="text-[#686D57] text-sm mt-1">Pekerjaan Proyek: Melanjutkan tugas atau proyek yang sedang
                        dikerjakan.</p>
                </div> <!-- Schedule Item 5 -->
                <div class="bg-[#E0E5B6] p-4 rounded-xl">
                    <h3 class="text-sm font-bold text-[#686D57]">12.00 - 13.00</h3>
                    <p class="text-[#686D57] text-sm mt-1">Makan Siang: Istirahat makan siang.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
