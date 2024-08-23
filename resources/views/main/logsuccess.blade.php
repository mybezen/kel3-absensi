@extends('layouts.main')

@section('section')
    <div class="container bg-gradient-to-t from-white to-yellow-100">

        <div class="flex flex-col items-center justify-center min-h-screen  ">
            <div>
                <p class="text-xl text-center text-gray-700 poppins-semibold">Pendaftaran Suksess !!!</p>
            </div>
            <div>
                <div class="flex items-center">

                    <button
                    class="mt-6  rounded-lg bg-[#E0E5B6] py-3 px-6 text-center align-middle uppercase text-black shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85]"
                    type="button">
                    <a href="/">
                    Login
                    </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
