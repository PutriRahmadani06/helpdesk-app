<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column">
    <div id="kt_app_sidebar_wrapper" class="app-sidebar-wrapper">
        <div class="hover-scroll-y my-5 my-lg-2 mx-4">
            <!-- Logo -->
            <div class="app-sidebar-logo d-flex align-items-center justify-content-between mb-4">
                <a href="/dashboard">
                    <img alt="Logo" src="{{ asset('assets/media/logos/demo39.svg') }}" class="h-25px theme-light-show" />
                    <img alt="Logo" src="{{ asset('assets/media/logos/demo39-dark.svg') }}" class="h-25px theme-dark-show" />
                </a>
                <div id="kt_app_sidebar_toggle" class="btn btn-sm btn-icon bg-body btn-color-gray-500 btn-active-color-primary w-30px h-30px">
                    <i class="ki-outline ki-abstract-14 fs-3 mt-1"></i>
                </div>
            </div>
            
            <!-- Menu -->
            <div class="menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary px-3">
                <!-- Dashboard -->
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('dashboard') }}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-home-2 fs-2"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                
                <!-- Semua Pengaduan -->
                <div class="menu-item">
                    {{-- <a class="menu-link" href="{{ route('complaints.index') }}"> --}}
                        <span class="menu-icon">
                            <i class="ki-outline ki-message-text-2 fs-2"></i>
                        </span>
                        <span class="menu-title">Semua Pengaduan</span>
                    </a>
                </div>
                
                <!-- Buat Pengaduan -->
                <div class="menu-item">
                    {{-- <a class="menu-link" href="{{ route('complaints.create') }}"> --}}
                        <span class="menu-icon">
                            <i class="ki-outline ki-plus fs-2"></i>
                        </span>
                        <span class="menu-title">Buat Pengaduan</span>
                    </a>
                </div>
                
                <div class="separator my-4"></div>
                
                <!-- Profil -->
                <div class="menu-item">
                    {{-- <a class="menu-link" href="{{ route('profile.edit') }}"> --}}
                        <span class="menu-icon">
                            <i class="ki-outline ki-profile-circle fs-2"></i>
                        </span>
                        <span class="menu-title">Profil Saya</span>
                    </a>
                </div>
                
                <!-- Logout -->
                <div class="menu-item">
                    {{-- <a class="menu-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> --}}
                        <span class="menu-icon">
                            <i class="ki-outline ki-exit-right fs-2"></i>
                        </span>
                        <span class="menu-title">Keluar</span>
                    </a>
                    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> --}}
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Sidebar-->