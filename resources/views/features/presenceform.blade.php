@extends('layouts.main')

@section('section')

<div class="h-full">
    <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
        <h2 class="text-lg font-semibold text-gray-700 mb-4 text-center">Absen</h2>
        <form id="absenForm">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Absen</label>
                <div class="flex items-center mb-2">
                    <input type="radio" name="absen" value="Masuk" id="masuk" class="mr-2 text-[#686D57] focus:ring-[#E0E5B6]">
                    <label for="masuk" class="text-gray-700">Masuk</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" name="absen" value="Pulang" id="pulang" class="mr-2 text-[#686D57] focus:ring-[#E0E5B6]">
                    <label for="pulang" class="text-gray-700">Pulang</label>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-[#686D57] text-sm font-bold mb-2">Upload</label>
                <div class="flex items-center justify-center w-full">
                    <label for="upload" class="flex flex-col items-center px-4 py-6 bg-[#E0E5B6] text-[#686D57] rounded-lg shadow-lg tracking-wide uppercase border-2 border-[#686D57] cursor-pointer hover:border-[#E0E5B6] hover:text-[#E0E5B6] hover:bg-[#686D57]">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M5 7V4a2 2 0 012-2h10a2 2 0 012 2v3m4 0v14a2 2 0 01-2 2H5a2 2 0 01-2-2V7h18zm-5 6h.01"></path>
                        </svg>
                        <span class="mt-2 text-sm leading-normal">Upload Foto</span>
                        <input type="file" id="upload" class="hidden" accept="image/*" />
                    </label>
                </div>
                <div id="preview" class="mt-4 flex justify-center"></div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Location</label>
                <input type="text" id="location" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Fetching location..." readonly>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Date</label>
                <input type="text" id="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Time</label>
                <input type="text" id="time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
            </div>

            <div class="flex items-center justify-center py-4">
                <button type="submit" class="bg-[#E0E5B6] hover:bg-[#686D57] text-[#686D57] hover:text-[#E0E5B6] font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    function updateDateTime() {
        const now = new Date();
        const date = now.toLocaleDateString();
        const time = now.toLocaleTimeString();
        document.getElementById('date').value = date;
        document.getElementById('time').value = time;
    }

    function fetchLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const lat = position.coords.latitude;
                const long = position.coords.longitude;
                document.getElementById('location').value = `Lat: ${lat}, Long: ${long}`;
            }, function(error) {
                document.getElementById('location').value = 'Location access denied.';
            });
        } else {
            document.getElementById('location').value = 'Geolocation is not supported.';
        }
    }

    window.onload = function() {
        updateDateTime();
        fetchLocation();
    };

    document.getElementById('upload').addEventListener('change', function(e) {
        const file = e.target.files[0];
        const preview = document.getElementById('preview');

        if (file) {
            const reader = new FileReader();

            reader.onload = function(event) {
                const imgElement = document.createElement('img');
                imgElement.src = event.target.result;
                imgElement.classList.add('max-w-full', 'max-h-48', 'rounded-lg', 'shadow-md');
                preview.innerHTML = '';
                preview.appendChild(imgElement);
            };

            reader.readAsDataURL(file);
        } else {
            preview.innerHTML = '';
        }
    });

    document.getElementById('absenForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const absen = document.querySelector('input[name="absen"]:checked').value;
        const location = document.getElementById('location').value;
        const date = document.getElementById('date').value;
        const time = document.getElementById('time').value;
        const upload = document.getElementById('upload').files[0];

        if (absen && location && date && time && upload) {
            alert(`Absen: ${absen}\nLocation: ${location}\nDate: ${date}\nTime: ${time}\nFile uploaded: ${upload.name}`);

            if (absen === 'Masuk') {
                window.location.href = "/logs";
            } else if (absen === 'Pulang') {
                window.location.href = "/logsout";
            }
        } else {
            alert('Please fill all fields and upload a file.');
        }
    });
</script>

@endsection
