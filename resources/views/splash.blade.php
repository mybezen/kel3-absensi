@extends('layouts.main')

@section('section')

<div class="flex flex-col bg-white items-center pt-[4rem]">
    <div class="flex items-center justify-center h-[3rem] text-center w-full bg-[#E0E5B6] text-2xl font-bold text-black mb-5">
        <img class="" src="{{ asset('images/express.svg') }}" alt="">
    </div>
    <div class="w-full bg-white shadow-md p-6 text-center">
        <div class="bg-gray-200 rounded-xl py-2 px-4 mb-5">
            <div class="text-lg text-black">Jadwal Anda Hari Ini</div>
            <div class="text-2xl font-semibold text-gray-900">08:00 - 17:00</div>
        </div>
        <div class="mb-5">
            <img src="https://via.placeholder.com/70" alt="Profile Image" class="rounded-full w-20 h-20 mx-auto mb-2">
            <h2 class="text-lg poppins-semibold text-[#686D57]">Amri Ikhda</h2>
            <p class=" poppins-regular text-[#686D57]">Karyawan</p>
            <button class="bg-[#E0E5B6] w-full text-gray-800 py-2 rounded-xl mt-3">Aktivitas</button>
        </div>
        <button class="bg-[#E0E5B6] w-full text-gray-800 py-2 rounded-xl mb-5">Presensi Masuk</button>
        <div class="flex flex-col poppins-regular mb-5">
            <div class="text-center">
                <!-- Icon Laporan Tugas -->

                <p class="text-sm text-black">Laporan Tugas</p>
            </div>
            <div class="text-center">
                <!-- Icon Jadwal -->

                <p class="text-sm text-black">Jadwal</p>
            </div>
            <div class="text-center">
                <!-- Icon Cuti -->

                <p class="text-sm text-black">Cuti</p>
            </div>
            <div class="text-center">
                <!-- Icon Pesan -->

                <p class="text-sm text-black">Pesan</p>
            </div>
            <div class="text-center">
                <!-- Icon Kontrak -->

                <p class="text-sm text-black">Kontrak Kerja</p>
            </div>
            <div class="text-center">
                <!-- Icon Shift -->

                <p class="text-sm text-black">Shift</p>
            </div>
        </div>
        <button class="poppins-semibold bg-[#E0E5B6] w-full text-black py-2 rounded-xl mt-6">Logout</button>
    </div>
</div>

@endsection
