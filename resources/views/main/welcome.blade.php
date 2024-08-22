@extends('layouts.main')

@section('section')
    <div class="flex flex-col items-center min-h-screen bg-white">
        <div
            class="flex items-center justify-center text-center w-full bg-[#E0E5B6] text-2xl font-bold text-black mb-5">
            <img class="w-[5rem]" src="{{ asset('images/express.svg') }}" alt="">
        </div>
        <div class="w-full p-6 text-center bg-white shadow-md">
            <div class="px-4 py-2 mb-5 bg-gray-200 rounded-xl">
                <div class="text-lg text-black">Jadwal Anda Hari Ini</div>
                <div class="text-2xl font-semibold text-gray-900">08:00 - 17:00</div>
            </div>
            <div class="mb-5">
                <img src="{{ asset('images/Ari.jpeg') }}" alt="Profile Image" class="w-20 h-20 mx-auto mb-2 rounded-full">
                <h2 class="text-lg poppins-semibold text-[#686D57]">Amri Ikhda</h2>
                <p class=" poppins-regular text-[#686D57]">Karyawan</p>
                <button class="bg-[#E0E5B6] w-full text-gray-800 py-2 rounded-xl mt-3">Aktivitas</button>
            </div>
            <a href="/logs">
                <button class="bg-[#E0E5B6] w-full text-gray-800 py-2 rounded-xl mb-5">Presensi Masuk</button>
            </a>
            <div class="grid grid-cols-3 gap-4 mb-5 poppins-regular">
                <div class="text-center">
                    <!-- Icon Laporan Tugas -->
                    <svg class="w-8 h-8 mx-auto mb-1 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14h-2v-2h2v2zm0-4h-2V7h2v5z" />
                    </svg>
                    <p class="text-sm text-black">Laporan Tugas</p>
                </div>
                <div class="text-center">
                    <!-- Icon Jadwal -->
                    <svg class="w-8 h-8 mx-auto mb-1 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14h-2v-2h2v2zm0-4h-2V7h2v5z" />
                    </svg>
                    <p class="text-sm text-black">Jadwal</p>
                </div>
                <div class="text-center">
                    <!-- Icon Cuti -->
                    <svg class="w-8 h-8 mx-auto mb-1 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14h-2v-2h2v2zm0-4h-2V7h2v5z" />
                    </svg>
                    <p class="text-sm text-black">Cuti</p>
                </div>
                <div class="text-center">
                    <!-- Icon Pesan -->
                    <svg class="w-8 h-8 mx-auto mb-1 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14h-2v-2h2v2zm0-4h-2V7h2v5z" />
                    </svg>
                    <p class="text-sm text-black">Pesan</p>
                </div>
                <div class="text-center">
                    <!-- Icon Kontrak -->
                    <svg class="w-8 h-8 mx-auto mb-1 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14h-2v-2h2v2zm0-4h-2V7h2v5z" />
                    </svg>
                    <p class="text-sm text-black">Kontrak Kerja</p>
                </div>
                <div class="text-center">
                    <!-- Icon Shift -->
                    <svg class="w-8 h-8 mx-auto mb-1 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14h-2v-2h2v2zm0-4h-2V7h2v5z" />
                    </svg>
                    <p class="text-sm text-black">Shift</p>
                </div>
            </div>
            <div>
                <a href="/">
                    <button class="poppins-semibold bg-[#E0E5B6] w-full text-black py-2 rounded-xl mt-6">Logout</button>
                </a>
            </div>
        </div>
    </div>
@endsection
