@extends('layouts.main')

@section('section')

    <div class="bg-white h-screen flex flex-col items-center">
        <div class="w-full max-w-sm px-4 py-6"> <!-- Header -->
            <div class="flex items-center space-x-4">
                <a href="/home">

                    <button class="text-[#686D57]"> <!-- Arrow Icon --> <svg
                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg> </button>
                </a>
                <h1 class="text-xl font-bold text-[#686D57]">Pesan</h1>
            </div> <!-- Messages -->
            <div class="mt-6 space-y-4"> <!-- Message Card 1 -->
                <div class="bg-[#E0E5B6] p-4 rounded-xl flex"> <img src="{{ asset('images/logo.png') }}" alt="Logo"
                        class="w-12 h-12 mr-4">
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h2 class="text-sm font-bold text-[#686D57]">SMK Negeri 46 Jakarta</h2> <span
                                class="text-xs text-[#686D57]">01 Aug</span>
                        </div>
                        <p class="text-[#686D57] text-sm mt-1">Pengumuman! Kegiatan Upacara Bendera di Ubuh menjadi Tadarus
                            Pagi di Kelas masing-masing.</p> <span class="text-xs text-[#686D57] block mt-2">10:10AM</span>
                    </div>
                </div> <!-- Message Card 2 -->
                <div class="bg-[#E0E5B6] p-4 rounded-xl flex"> <img src="{{ asset('images/logo.png') }}" alt="Logo"
                        class="w-12 h-12 mr-4">
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h2 class="text-sm font-bold text-[#686D57]">SMK Negeri 46 Jakarta</h2> <span
                                class="text-xs text-[#686D57]">16 Aug</span>
                        </div>
                        <p class="text-[#686D57] text-sm mt-1">Perhatian! Saat Kegiatan Lomba, Seluruh Siswa berada di
                            Lapangan dan Tetap Kondusif.</p> <span class="text-xs text-[#686D57] block mt-2">06:00AM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
