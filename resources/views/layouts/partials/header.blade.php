<!--begin::Header-->
<div id="kt_app_header" class="app-header d-flex flex-column flex-stack">
    <div class="d-flex flex-stack flex-grow-1">
        <div class="app-header-logo d-flex align-items-center ps-lg-12">
            <!-- Sidebar toggle -->
            <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-sm btn-icon bg-body btn-color-gray-500 btn-active-color-primary w-30px h-30px ms-n2 me-4 d-none d-lg-flex">
                <i class="ki-outline ki-abstract-14 fs-3 mt-1"></i>
            </div>
            <!-- Logo -->
            <a href="/dashboard" class="app-sidebar-logo">
                <img alt="Logo" src="{{ asset('assets/media/logos/demo39.svg') }}" class="h-25px theme-light-show" />
            </a>
        </div>
        
        <div class="app-navbar flex-grow-1 justify-content-end">
            <div class="app-navbar-item ms-2 ms-lg-6" id="kt_header_user_menu_toggle">
                <div class="cursor-pointer symbol symbol-circle symbol-30px symbol-lg-45px">
                    <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="user" />
                </div>
            </div>
        </div>
    </div>
    <div class="app-header-separator"></div>
</div>
<!--end::Header-->