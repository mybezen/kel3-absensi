@extends('layouts.main')

@section('section')

<div class="bg-gray-100">
    <div class="flex flex-col h-screen justify-start items-center">
        <div class="w-full max-w-md bg-white shadow-md rounded-lg mt-6">
            <div class="flex items-center p-4">
                <button class="">
                    <a href="/home">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                </button>
                <h1 class="text-lg font-bold">Kontrak</h1>
            </div>
            <div class="p-4">
                <div class="bg-[#E0E5B6] p-6 rounded-lg">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-20 h-20">
                    </div>
                    <div class="text-center">
                        <h2 class="font-bold text-lg">Judul Kontrak</h2>
                        <p class="text-sm font-medium text-gray-700">SMK Negeri 46 Jakarta</p>
                        <p class="mt-2 text-sm text-gray-600">
                            B7, Jl. Cipinang Pulo No.19, RT.7/RW.14, North Cipinang Besar, Jatinegara, East Jakarta City, Jakarta 13410
                        </p>
                        <p class="mt-4 font-bold text-gray-700">Berlaku 2024-2045</p>
                        <div class="mt-6">
                            <p class="text-sm text-gray-600">22 Agustus 2024</p>
                            <p class="font-semibold text-gray-700">Jakarta Timur</p>
                            <div class="mt-2 flex justify-center">
                                <img src="{{ asset('images/ttd.png') }}" alt="Stamp" class="w-16 h-16">
                            </div>
                            <p class="text-sm font-semibold text-gray-700 mt-2">(Nama Kepala Sekolah)</p>
                            <p class="text-xs text-gray-500">NIP. 197008261996021001</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
