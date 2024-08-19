<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'admin panel template' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href=""> --}}

    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Google Font Family (Mandatory in All Pages) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">


    <!-- App css  (Mandatory in All Pages) -->
    @vite('resources/css/app.css')
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">

    @stack('styles')
</head>

<body>
    <div class="flex wrapper">

        @include('admin.includes.sidebar')

        <!-- Start Page Content here -->
        <div class="page-content">

            @include('admin.includes.navbar')

            <main class="flex-grow p-6">
                @yield('section')
            </main>

            <!-- Footer Start -->
            <footer class="footer h-16 flex items-center px-6 bg-white border-t border-gray-200 shadow">
                <div class="flex md:justify-between justify-center w-full gap-4">
                    <div>
                        <script>document.write(new Date().getFullYear())</script> © INDI Technology. All Rights Reserved.
                    </div>
                    <div class="md:flex hidden gap-2 item-center md:justify-end">
                        Design &amp; Develop by<a href="https://indi.tech" class="text-primary">INDI Technology</a>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>
        <!-- End Page content -->

    </div>

    <!-- Plugin Js (Mandatory in All Pages) -->
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/preline/preline.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/iconify-icon/iconify-icon.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>

    @stack('scripts')

    <!-- App Js (Mandatory in All Pages) -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

</body>

</html>
