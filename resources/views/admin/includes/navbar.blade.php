<!-- Topbar Start -->
<header class="sticky top-0 bg-white h-16 flex items-center px-5 gap-4 z-50">
    <!-- Topbar Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="md:hidden flex">
        {{-- your logo here --}}
        <img src="" class="h-6" alt="Small logo">
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-toggle-menu" class="text-gray-500 hover:text-gray-600 p-2 rounded-full cursor-pointer"
        data-hs-overlay="#app-menu" aria-label="Toggle navigation">
        <i class="ti ti-menu-2 text-2xl"></i>
    </button>

    <div class="ms-auto hs-dropdown relative inline-flex [--placement:bottom-right]">
    </div>

    <!-- Fullscreen Toggle Button -->
    <div class="md:flex hidden">
        <button data-toggle="fullscreen" type="button" class="nav-link p-2">
            <span class="sr-only">Fullscreen Mode</span>
            <span class="flex items-center justify-center size-6">
                <i class="ti ti-maximize text-2xl"></i>
            </span>
        </button>
    </div>

    <!-- Profile Dropdown Button -->
    <div class="relative">
        <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
            <button type="button" class="hs-dropdown-toggle nav-link flex items-center gap-2">
                <span class="md:flex items-center hidden">
                    <span class="font-semibold text-base">{{ auth()->user()->name }}</span>
                    <i class="ti ti-chevron-down text-sm ms-2"></i>
                </span>
            </button>
            <div class="hs-dropdown-menu duration mt-2 min-w-[12rem] rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 hidden">
                <a href="{{ route('admin.profile.edit') }}" class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100">
                    Profile
                </a>
                <button type="submit" form="logout" class="w-full flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100">
                    Log Out
                </button>
                <form id="logout" action="{{ route('admin.logout') }}" method="post">@csrf</form>
            </div>
        </div>
    </div>
</header>
<!-- Topbar End -->
