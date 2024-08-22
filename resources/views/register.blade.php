@extends('layouts.main')

@section('section')
<div class="container p-6 bg-gradient-to-b from-[#FEFAE0] to-[#989686]">
<div class="relative flex flex-col text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border">
    <h4 class="block poppins-bold text-4xl antialiased leading-snug tracking-normal text-black">
      Selamat
    </h4>
    <p class="block mt-1 poppins-semibold  antialiased  leading-relaxed text-[#686D57] text-4xl">
      Datang Di
    </p>
    <div class="w-[8rem] flex left-6">
        <img src="{{ asset('images/Express.png') }}" alt="">
    </div>
    <form class="max-w-screen-lg mt-8 mb-2 w-80 sm:w-96">
      <div class="flex flex-col gap-6 mb-1">
        <h6
          class="block -mb-3 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-blue-gray-900">
          Nama Lengkap
        </h6>

        <div class="bg-[#E0E5B6] rounded-2xl relative h-11 w-full min-w-[200px]">
          <input
            type="text"
            placeholder="Your username"
            class="peer h-full w-full rounded-2xl border border-[#686D57] border-t-transparent  bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-[#686D57] placeholder-shown:border-t-[#686D57] focus:border-2  focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
          <label
            class="before:content[' '] after:content[' '] pointer-events-none absolute left- -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-[#686D57] before:transition-all before:content-none after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-[#686D57] after:transition-all after:content-none peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-[#686D57] peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-[#686D57] peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-black"></label>
        </div>
        <h6
          class="block -mb-3 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-blue-gray-900">
          Email
        </h6>

        <div class="bg-[#E0E5B6] rounded-2xl relative h-11 w-full min-w-[200px]">
          <input
            type="email"
            placeholder="Your email"
            class="peer h-full w-full rounded-2xl border border-[#686D57] border-t-transparent  bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-[#686D57] placeholder-shown:border-t-[#686D57] focus:border-2  focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
          <label
            class="before:content[' '] after:content[' '] pointer-events-none absolute left- -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-[#686D57] before:transition-all before:content-none after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-[#686D57] after:transition-all after:content-none peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-[#686D57] peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-[#686D57] peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"></label>
        </div>
        <h6
          class="block -mb-3 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-blue-gray-900">
          No Telepon
        </h6>

        <div class="bg-[#E0E5B6] rounded-2xl relative h-11 w-full min-w-[200px]">
          <input
            type=""
            placeholder="Your username"
            class="peer h-full w-full rounded-2xl border border-[#686D57] border-t-transparent  bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-[#686D57] placeholder-shown:border-t-[#686D57] focus:border-2  focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
          <label
            class="before:content[' '] after:content[' '] pointer-events-none absolute left- -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-[#686D57] before:transition-all before:content-none after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-[#686D57] after:transition-all after:content-none peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-[#686D57] peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-[#686D57] peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"></label>
        </div>
        <h6
          class="block -mb-3 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-{}">
          Password
        </h6>
        <div class="bg-[#E0E5B6] rounded-2xl relative h-11 w-full min-w-[200px]">
          <input type="password" placeholder="********"
            class="peer h-full w-full rounded-2xl border border-[#686D57] border-t-transparent  bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-[#686D57] placeholder-shown:border-t-[#686D57] focus:border-2  focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
          <label
            class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-[#686D57] before:transition-all before:content-none after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-[#686D57] after:transition-all after:content-none peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-[#686D57] peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-[#686D57] peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"></label>
        </div>
      </div>
      <div class="mt-5 inline-flex items-center">
        <label class=" rounded-2xl relative -ml-2.5 flex cursor-pointer items-center rounded-full p-3" htmlFor="remember">
          <input type="checkbox"
            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-2xl border transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-[#E0E5B6] before:opacity-0 before:transition-opacity checked:border-[#E0E5B6] checked:bg-[#E0E5B6] checked:before:bg-[#E0E5B6] hover:before:opacity-10"
            id="remember" />
          <span
            class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor"
              stroke="currentColor" stroke-width="1">
              <path fill-rule="evenodd"
                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                clip-rule="evenodd"></path>
            </svg>
          </span>
        </label>
        <label class="mt-px font-light text-gray-700 cursor-pointer select-none" htmlFor="remember">
          <p class="flex items-center font-sans text-sm antialiased font-normal leading-normal text-gray-700">
            I agree the
            <a href="#" class="font-medium transition-colors hover:text-gray-900">
              &nbsp;Terms and Conditions
            </a>
          </p>
        </label>
      </div>
      <button
        class="mt-6 block w-6/12 select-none rounded-2xl bg-[#E0E5B6] py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-black shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button">
        Login
      </button>
    </form>
  </div>
</div>
@endsection
