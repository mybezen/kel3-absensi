<!-- Start Sidebar -->
<aside id="app-menu" class="hs-overlay fixed inset-y-0 start-0 z-[60] hidden w-64 -translate-x-full transform overflow-y-auto border-e border-default-200 bg-white transition-all duration-300 hs-overlay-open:translate-x-0 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden [--body-scroll:true] [--overlay-backdrop:true] lg:[--overlay-backdrop:false]">
    <div class="sticky top-0 flex h-16 items-center justify-center px-6">
        <a href="{{ route('admin.dashboard') }}">
            <img src="" alt="logo" class="flex h-6">
        </a>
    </div>

    <div class="hs-accordion-group h-[calc(100%-72px)] p-4 ps-0" data-simplebar>
        <ul class="admin-menu flex w-full flex-col gap-1.5">
            <li class="menu-item">
                <a href="{{ route('admin.dashboard') }}" class="group flex items-center gap-x-3.5 rounded-e-full px-4 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-100">
                    <i class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">home</i>
                    Dashboard
                </a>
            </li>

            <li class="px-5 py-2 text-sm font-medium text-default-600">Elements</li>

            <li class="hs-accordion menu-item">
                <a href="javascript:void(0)" class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-e-full px-4 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                    <i class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">share</i>
                    <span class="menu-text">Level</span>
                    <span class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></span>
                </a>

                <div id="sidenavLevel" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 space-y-2">
                        <li class="menu-item">
                            <a href="javascript: void(0)" class="flex items-center gap-x-3.5 rounded-e-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                <span class="menu-text">Item 1</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="javascript: void(0)" class="flex items-center gap-x-3.5 rounded-e-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                <span class="menu-text">Item 2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-e-full px-4 py-2 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                    <i class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">verified</i>
                    <span class="menu-text"> Badge Items </span>
                    <span class="ms-auto inline-flex items-center gap-x-1.5 py-0.5 px-2 rounded-full font-semibold text-xs bg-gray-800 text-white">Hot</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- End Sidebar -->
