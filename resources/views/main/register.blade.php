@extends('layouts.main')

@section('section')
<div class="min-h-screen container p-6 bg-[#F9DBBA]">
    <div class="relative items-center flex flex-col text-gray-700 bg-transparent shadow-none rounded-2xl bg-clip-border">
        <h4 class="block text-3xl antialiased leading-snug tracking-normal text-[#686D57] poppins-bold">
            Register Akun
        </h4>
        <form class="max-w-screen-lg mt-8 mb-2 w-80 sm:w-96">
            <div class="flex flex-col gap-6 mb-1">
                <h6
                    class="block -mb-3 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-[#686D57]">
                    Nama Lengkap
                </h6>

                <div class="bg-[#E0E5B6] rounded-2xl relative h-11 w-full min-w-[200px]">
                    <input
                        type="text"
                        placeholder="Your username"

                        class="h-full w-full rounded-2xl border border-[#686D57] bg-[#E0E5B6]" />
                    <label
                        class="before:content[' '] after:content[' '] pointer-events-none absolute left- -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal "></label>
                </div>

                <h6
                    class="block -mb-3 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-[#686D57]">
                    Email
                </h6>

                <div class="bg-[#E0E5B6] rounded-2xl relative h-11 w-full min-w-[200px]">
                    <input
                        type="email"
                        placeholder="Your email"

                        class="h-full w-full rounded-2xl border border-[#686D57] bg-[#E0E5B6]" />
                    <label
                        class="before:content[' '] after:content[' '] pointer-events-none absolute left- -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md  before:transition-all before:content-none after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-[#686D57] after:transition-all after:content-none peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-[#686D57] peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-[#686D57] peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"></label>
                </div>

                <h6
                    class="block -mb-3 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-[#686D57]">
                    No Telepon
                </h6>

                <div class="bg-[#E0E5B6] rounded-2xl relative h-11 w-full min-w-[200px]">
                    <input
                        type="number"
                        placeholder="Your phone number"

                        class="h-full w-full rounded-2xl border border-[#686D57] bg-[#E0E5B6]" />
                    <label
                        class="before:content[' '] after:content[' '] pointer-events-none absolute left- -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md  before:transition-all before:content-none after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-[#686D57] after:transition-all after:content-none peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-[#686D57] peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-[#686D57] peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"></label>
                </div>

                <h6
                    class="block -mb-3 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-[#686D57]">
                    Password
                </h6>

                <div class="bg-[#E0E5B6] rounded-2xl relative h-11 w-full min-w-[200px]">
                    <input type="password" placeholder="********"
                        class="h-full w-full rounded-2xl border border-[#686D57] bg-[#E0E5B6]" />
                    <label
                        class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md  before:transition-all before:content-none after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-[#686D57] after:transition-all after:content-none peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-[#686D57] peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-[#686D57] peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"></label>
                </div>

                <h6
                    class="block -mb-3 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-[#686D57]">
                    Confirm Password
                </h6>

                <div class="bg-[#E0E5B6] rounded-2xl relative h-11 w-full min-w-[200px]">
                    <input type="password" placeholder="********"
                        class="h-full w-full rounded-2xl border border-[#686D57] bg-[#E0E5B6]" />
                    <label
                        class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md  before:transition-all before:content-none after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-[#686D57] after:transition-all after:content-none peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-[#686D57] peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-[#686D57] peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"></label>
                </div>

                <button
                    class="bg-[#E0E5B6] h-[40px] mt-6 text-[#686D57] border-[#686D57] font-sans rounded-2xl border-2 w-4/12 ">
                    <a href="/logsuc">Daftar</a></button>

                <p
                    class="mt-4 block text-center text-xs poppins-semibold antialiased  leading-normal text-[#686D57]">
                    Already have an account?
                    <a href="/"
                        class="relative poppins-bold transition-colors text-[#E0E5B6] hover:text-[#686D57]">Login</a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection
