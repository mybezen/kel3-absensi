@extends('layouts.main')

@section('section')
    <div class="flex flex-col items-center min-h-screen bg-white">
        <div class="bg-white">

        </div>
        <div class="mt-12 flex items-center justify-center text-center w-full bg-[#E0E5B6] text-2xl font-bold text-black mb-5">
            <img class="w-[5rem]" src="{{ asset('images/express.svg') }}" alt="">
        </div>
        <div class="w-full p-6 text-center bg-white shadow-md">
            <div class="px-4 py-2 mb-5 bg-[#E0E5B6] border-2 border-[#686D57] rounded-xl">
                <div class="text-lg poppins-semibold text-[#686D57]">Jadwal Anda Hari Ini</div>
                <div class="text-2xl poppins-bold text-[#686D57]">08:00 - 17:00</div>
            </div>
            <div class="mb-5">
                <img src="{{ asset('images/Ari.jpeg') }}" alt="Profile Image" class="w-[8rem] mx-auto mb-2 rounded-full">
                <h2 class="text-lg poppins-semibold text-[#686D57]">Z </h2>
                <p class=" poppins-semibold text-[#686D57]">Karyawan</p>
                <button class="bg-[#E0E5B6] w-full text-gray-800 py-2 rounded-xl mt-3 poppins-bold">Aktivitas</button>
            </div>
            <a href="/logous">
                <button class="bg-[#E0E5B6] w-full text-gray-800 py-2 rounded-xl mb-5 poppins-bold">Presensi Keluar</button>
            </a>
            <div class="mt-4 grid grid-cols-3 gap-4 mb-5 poppins-regular">
                <div class="text-center rounded-2xl bg-white hover:bg-[#E0E5B6] p-2 border-4 border-[#E0E5B6] ">
                    <!-- Icon Laporan Tugas -->

                    <svg class="w-8 h-8 mx-auto mb-1 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0 2.77-.693a9 9 0 0 1 6.208.682l.108.054a9 9 0 0 0 6.086.71l3.114-.732a48.524 48.524 0 0 1-.005-10.499l-3.11.732a9 9 0 0 1-6.085-.711l-.108-.054a9 9 0 0 0-6.208-.682L3 4.5M3 15V4.5" />
                      </svg>

                    <p class="text-sm mt-3 poppins-semibold text-[#686D57]">Laporan Tugas</p>
                </div>
                <div class="text-center rounded-2xl bg-white hover:bg-[#E0E5B6] p-2 border-4 border-[#E0E5B6]">
                    <!-- Icon Jadwal -->
                    <svg class="w-8 h-8 mx-auto mb-1 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>

                    <p class="text-sm mt-3 poppins-semibold text-[#686D57]">Jadwal</p>
                </div>
                <div class="text-center rounded-2xl bg-white hover:bg-[#E0E5B6] p-2 border-4 border-[#E0E5B6]">
                    <!-- Icon Cuti -->
                    <svg class="w-8 h-8 mx-auto mb-1 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4Zm16 7H4v7h16v-7ZM5 8a1 1 0 0 1 1-1h.01a1 1 0 0 1 0 2H6a1 1 0 0 1-1-1Zm4-1a1 1 0 0 0 0 2h.01a1 1 0 0 0 0-2H9Zm2 1a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H12a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                      </svg>

                    <p class="text-sm mt-3 poppins-semibold text-[#686D57]">Cuti</p>
                </div>
                <div class="text-center rounded-2xl bg-white hover:bg-[#E0E5B6] p-2 border-4 border-[#E0E5B6]">
                    <!-- Icon Pesan -->
                    <svg class="w-8 h-8 mx-auto mb-1 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
                      </svg>

                    <p class="text-sm mt-3 poppins-semibold text-[#686D57]">Pesan</p>
                </div>
                <div class="text-center rounded-2xl bg-white hover:bg-[#E0E5B6] p-2 border-4 border-[#E0E5B6]">
                    <!-- Icon Kontrak -->
                    <svg class="w-8 h-8 mx-auto mb-1 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 16v-3h.375a.626.626 0 0 1 .625.626v1.749a.626.626 0 0 1-.626.625H6Zm6-2.5a.5.5 0 1 1 1 0v2a.5.5 0 0 1-1 0v-2Z"/>
                        <path fill-rule="evenodd" d="M11 7V2h7a2 2 0 0 1 2 2v5h1a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-1a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2H3a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1h6a2 2 0 0 0 2-2Zm7.683 6.006 1.335-.024-.037-2-1.327.024a2.647 2.647 0 0 0-2.636 2.647v1.706a2.647 2.647 0 0 0 2.647 2.647H20v-2h-1.335a.647.647 0 0 1-.647-.647v-1.706a.647.647 0 0 1 .647-.647h.018ZM5 11a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h1.376A2.626 2.626 0 0 0 9 15.375v-1.75A2.626 2.626 0 0 0 6.375 11H5Zm7.5 0a2.5 2.5 0 0 0-2.5 2.5v2a2.5 2.5 0 0 0 5 0v-2a2.5 2.5 0 0 0-2.5-2.5Z" clip-rule="evenodd"/>
                        <path d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Z"/>
                      </svg>

                    <p class="text-sm mt-3 poppins-semibold text-[#686D57]">Kontrak Kerja</p>
                </div>
                <div class="text-center rounded-2xl bg-white hover:bg-[#E0E5B6] p-2 border-4 border-[#E0E5B6]">
                    <!-- Icon Shift -->
                    <svg class="w-8 h-8 mx-auto mb-1 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                      </svg>

                    <p class="text-sm mt-3 poppins-semibold text-[#686D57]">Shift</p>
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
