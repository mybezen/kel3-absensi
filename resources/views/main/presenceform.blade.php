@extends('layouts.main')

@section('section')

<div class="bg-gray-100 flex h-screen">
    <div class="w-full max-w-md mx-auto p-4">
        <div class="relative mt-4">
            <a href="/home">
                <button class="absolute ml-1 text-black hover:text-gray-800">
                    <!-- Replace with an appropriate back icon if necessary -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </button>
            <h1 class="text-lg font-semibold text-center mb-4">Absen</h1>
        </div>
        <form>
            <div class="bg-green-100 p-4 mb-4 rounded-lg shadow">
                <label class="block font-semibold mb-2">Absen</label>
                <div class="flex items-center mb-2">
                    <input type="radio" id="masuk" name="absen" class="mr-2">
                    <label for="masuk" class="mr-4">Masuk</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="pulang" name="absen" class="mr-2">
                    <label for="pulang">Pulang</label>
                </div>
            </div>
            <div class="bg-gray-600 p-4 mb-4 rounded-lg shadow">
                <label class="block font-semibold mb-2">Upload</label>
                <label class="flex bg-green-200 text-green-700 px-4 py-2 rounded-full cursor-pointer hover:bg-green-300">
                    <input type="file" class="hidden">
                    Upload Foto
                </label>
            </div>
            <div class="bg-green-100 p-4 mb-4 rounded-lg shadow">
                <label class="block font-semibold mb-2" for="location">Location</label>
                <input type="text" id="location" class="w-full border-0 bg-transparent focus:outline-none" placeholder="Enter Location">
            </div>
            <div class="flex justify-center bg-">
                <button type="submit" class="text-black px-6 py-2 rounded-full hover:bg-green-800">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
