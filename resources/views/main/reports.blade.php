@extends('layouts.main')

@section('section')

<div class="bg-white flex items-center justify-center h-screen">
    <div class="w-full max-w-md mx-auto p-4">
        <div class="relative">
            <a href="/home">
                <button class="absolute left-0 top-0 mt-1 ml-1 text-black hover:text-gray-800">
                    <!-- Replace with an appropriate back icon if necessary -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            </a>
            <h1 class="text-[#686D57] text-lg poppins-semibold text-center mb-4">Laporan Tugas</h1>
        </div>
            <div class=" bg-[#E0E5B6] border-2 border-[#686D57] p-4 rounded-lg shadow">
                <p><span class="poppins-semibold text-[#686D57]">Judul Laporan:</span> </p>
                <p><span class="poppins-semibold text-[#686D57]">Tujuan Laporan:</span> </p>
                <p><span class="poppins-semibold text-[#686D57]">Isi Laporan:</span> </p>
                <p><span class="poppins-semibold text-[#686D57]">Tanggal:</span> </p>
                <p><span class="poppins-semibold text-[#686D57]">Penanggung Jawab:</span> </p>
                <p><span class="poppins-semibold text-[#686D57]">Dokumentasi/Informasi Khusus:</span> </p>
            </div>
    </div>
</div>

@endsection
