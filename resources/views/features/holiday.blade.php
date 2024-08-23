@extends('layouts.main')

@section('section')

<div class="bg-white p-4">
    <div class="max-w-md mx-auto">
        <div class="flex items-center justify-between mb-4">
            <button class="">
                <a href="/home">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </button>
            <h1 class="text-[#686D57] font-bold">Cuti</h1>
            <div></div>
        </div>

        <!-- Form -->
        <form id="cutiForm">
            <!-- Durasi Section -->
            <div class="bg-[#E0E5B6] p-4 rounded-md mb-4">
                <h2 class="text-[#686D57] font-semibold mb-2">Durasi</h2>
                <div class="mb-2">
                    <label class="block text-[#686D57] mb-1">Tanggal Mulai</label>
                    <div class="relative">
                        <input type="date" class="w-full p-2 rounded-md text-[#686D57]" placeholder="mm/dd/yyyy">
                        <span class="absolute right-2 top-2 text-[#686D57]">📅</span>
                    </div>
                </div>
                <div>
                    <label class="block text-[#686D57] mb-1">Tanggal Akhir</label>
                    <div class="relative">
                        <input type="date" class="w-full p-2 rounded-md text-[#686D57]" placeholder="mm/dd/yyyy">
                        <span class="absolute right-2 top-2 text-[#686D57]">📅</span>
                    </div>
                </div>
            </div>

            <!-- Alasan Section -->
            <div class="bg-[#E0E5B6] p-4 rounded-md mb-4">
                <h2 class="text-[#686D57] font-semibold mb-2">Alasan</h2>
                <input type="text" class="w-full p-2 rounded-md text-[#686D57] border-b border-[#686D57]" placeholder="Masukkan alasan anda disini">
            </div>

            <!-- Jenis Section -->
            <div class="bg-[#E0E5B6] p-4 rounded-md mb-4">
                <h2 class="text-[#686D57] font-semibold mb-2">Jenis</h2>
                <div class="relative">
                    <select class="w-full p-2 rounded-md text-[#686D57]">
                        <option>Pilih Opsi</option>
                        <option>Cuti Sakit</option>
                        <option>Cuti Libur</option>
                        <option>Cuti Hamil</option>
                        <option>Cuti Kedukaan</option>
                        <option>Cuti Kompensasi</option>
                        <option>Cuti Panjang</option>
                        <option>Cuti Pendidikan</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
            </div>

            <!-- Request Button -->
            <div class="flex justify-center">
                <button type="submit" class="bg-[#686D57] text-white py-2 px-6 rounded-md">Request</button>
            </div>
        </form>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.getElementById('cutiForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        alert('Permintaan cuti berhasil terkirim');
        window.location.href = '/home'; // Redirect to /home route
    });
</script>

@endsection
