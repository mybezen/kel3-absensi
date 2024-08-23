@extends('layouts.main')

@section('section')

<div class="bg-white p-4">
    <div class="max-w-md mx-auto">
        <div class="flex items-center mb-4">
            <a href="/home">
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            </a>
            <h1 class="px-[9rem] text-[#686D57] text-2xl poppins-bold">Shift</h1>
            <div></div>
        </div>

        <div class="mt-12 flex flex-row pl-28 gap-20 bg-[#E0E5B6] p-2 rounded-md mb-2 text-[#686D57] font-semibold">
            <div>Hari</div>
            <div>Jam</div>
            <div>Ruang</div>
            <div></div>
        </div>

        <!-- Repeat this div for each row -->
        <div class="py-4">

            <div class="grid grid-cols-4 gap- items-center text-[#686D57] mb-1">
                <input type="checkbox" class="ml-2 rounded-md hover:bg-[#E0E5B6]">
                <div>Senin</div>
                <div>6:45-8:305</div>
                <div>308</div>
            </div>
            <div class="grid grid-cols-4 gap-2 items-center text-[#686D57] mb-1">
                <input type="checkbox" class="ml-2 rounded-md hover:bg-[#E0E5B6]">
                <div>Senin</div>
                <div>8:30-09:45</div>
                <div>205</div>
            </div>
            <div class="grid grid-cols-4 gap-2 items-center text-[#686D57] mb-1">
                <input type="checkbox" class="ml-2 rounded-md hover:bg-[#E0E5B6]">
                <div>Senin</div>
                <div>10:00-12:15</div>
                <div>104</div>
            </div>
            <div class="grid grid-cols-4 gap-2 items-center text-[#686D57] mb-1">
                <input type="checkbox" class="ml-2 rounded-md hover:bg-[#E0E5B6]">
                <div>Senin</div>
                <div>12:45-15:00</div>
                <div>Mushola</div>
            </div>
            <div class="grid grid-cols-4 gap-2 items-center text-[#686D57] mb-1">
                <input type="checkbox" class="ml-2 rounded-md hover:bg-[#E0E5B6]">
                <div>Selasa</div>
                <div>6:45-09:45</div>
                <div>203</div>
            </div>
            <div class="grid grid-cols-4 gap-2 items-center text-[#686D57] mb-1">
                <input type="checkbox" class="ml-2 rounded-md hover:bg-[#E0E5B6]">
                <div>Selasa</div>
                <div>12:45-15:00</div>
                <div>307</div>
            </div>
            <div class="grid grid-cols-4 gap-2 items-center text-[#686D57] mb-1">
                <input type="checkbox" class="ml-2 rounded-md hover:bg-[#E0E5B6]">
                <div>Rabu</div>
                <div>11:30-12:15</div>
                <div>301B</div>
            </div>
            <div class="grid grid-cols-4 gap-2 items-center text-[#686D57] mb-1">
                <input type="checkbox" class="ml-2 rounded-md hover:bg-[#E0E5B6]">
                <div>Rabu</div>
                <div>12:45-15:00</div>
                <div>209</div>
            </div>
            <div class="grid grid-cols-4 gap-2 items-center text-[#686D57] mb-1">
                <input type="checkbox" class="ml-2 rounded-md hover:bg-[#E0E5B6]">
                <div>Kamis</div>
                <div>10:00-13:30</div>
                <div>305</div>
            </div>
        </div>
            <!-- End of repeat -->

        <!-- Duplicate the above div as needed -->
    </div>
</div

@endsection
