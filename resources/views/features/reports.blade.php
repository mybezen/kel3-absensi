@extends('layouts.main')

@section('section')

<body class="bg-white p-4">
    <div class="max-w-md mx-auto">
        <div class="flex items-center justify-between mb-4 pt-8">
            <button class="">
                <a href="/home">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </button>
            <h1 class="text-[#686D57] font-bold">Laporan Kerja</h1>
            <div></div>
        </div>

        <!-- Form -->
        <form id="laporanForm">
            <div class="px-4 pt-[4rem]">

                <!-- Kegiatan Section -->
                <div class="bg-white p-4 border-2 border-[#686D57] rounded-md mb-4 drop-shadow-lg">
                    <label class="block text-[#686D57] mb-1 font-semibold">Kegiatan :</label>
                    <input type="text" class="w-full p-2 text-[#686D57] border-none focus:outline-none" placeholder="Text here">
                </div>

                <!-- Keterangan Section -->
                <div class="bg-white p-4 border-2 border-[#686D57] rounded-md drop-shadow-lg">
                    <label class="block text-[#686D57] mb-1 font-semibold">Keterangan :</label>
                    <textarea class="w-full p-2 text-[#686D57] border-none focus:outline-none" rows="4" placeholder="Text here"></textarea>
                </div>
            </div>

                <!-- Send Button -->
                <div class="flex justify-end pr-6 pt-12">
                    <button type="submit" class="bg-[#E0E5B6] hover:bg-[#686D57] text-[#686D57] hover:text-[#E0E5B6] drop-shadow-md hover:drop-shadow-lg py-2 px-6 rounded-md">Send</button>
                </div>
        </form>
    </div>

    <!-- JavaScript -->
    <script>
        document.getElementById('laporanForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            alert('Laporan kerja berhasil terkirim');
            window.location.href = '/home'; // Redirect to /home route
        });
    </script>
</body>

@endsection
