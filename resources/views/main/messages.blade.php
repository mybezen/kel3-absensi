@extends('layouts.main')

@section('section')

<div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-md">
        <div class="text-center py-4">
            <h1 class="text-xl font-bold">Pesan</h1>
        </div>
        <!-- Message 1 -->
        <div class="bg-green-100 p-4 rounded-lg mb-4 flex justify-between">
            <div class="flex items-start">
                <img src="{{ asset('images/logo.png') }}" alt="school-logo">
                <div>
                    <p class="font-bold">SMK Negeri 46 Jakarta</p>
                    <p>Pengumuman Kegiatan Upacara Bendera di ubah menjadi Tadarrus Pagi di Kelas masing-masing.</p>
                    <span class="text-xs text-gray-500">10:18 AM</span>
                </div>
            </div>
            <div class="text-sm text-gray-500">01 Aug</div>
        </div>
        <!-- Message 2 -->
        <div class="bg-green-100 p-4 rounded-lg mb-4 flex justify-between">
            <div class="flex items-start">
                <img src="{{ asset('images/logo.png') }}" alt="school-logo">
                <div>
                    <p class="font-bold">SMK Negeri 46 Jakarta</p>
                    <p>Perhatian! Saat Kegiatan Lomba, Seluruh Siswa berada di Lapangan dan Tetap Kondusif.</p>
                    <span class="text-xs text-gray-500">06:00 AM</span>
                </div>
            </div>
            <div class="text-sm text-gray-500">10 Aug</div>
        </div>
    </div>
</div>

@endsection
