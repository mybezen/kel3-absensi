@extends('layouts.main')

@section('section')

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-full max-w-md">
        <!-- Title -->
        <div class="text-center py-4">
            <h1 class="text-xl font-bold">Shift</h1>
        </div>

        <div class="flex flex-row gap-6 justify-center mx-auto my-2">
            <span class="font-bold text-sm bg-green-100 py-1 px-2 rounded-lg">Hari</span>
            <span class="font-bold text-sm bg-green-100 py-1 px-2 rounded-lg">Jam</span>
            <span class="font-bold text-sm bg-green-100 py-1 px-2 rounded-lg">Ruang</span>
        </div>

        <div class="divide-y divide-gray-300">

            <div class="grid grid-cols-4 gap-4 py-2 items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600">
                <span class="text-center">Senin</span>
                <span class="text-center">7:00-11:45</span>
                <span class="text-center">6,8,10</span>
            </div>

            <div class="grid grid-cols-4 gap-4 py-2 items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600">
                <span class="text-center">Senin</span>
                <span class="text-center">7:00-11:45</span>
                <span class="text-center">6,8,10</span>
            </div>

        </div>
    </div>
</body>

@endsection
