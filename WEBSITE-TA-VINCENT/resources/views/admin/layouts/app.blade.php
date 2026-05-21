<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard Admin')</title>
    <meta name="description" content="Panel admin UMKM Bersama Maju untuk memantau penjualan, pesanan, dan UMKM." />

    @fonts
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="relative min-h-screen bg-umkm-cream font-sans text-umkm-brown antialiased">
    {{-- Dekorasi latar belakang organik --}}
    <x-site-background />

    <div class="relative min-h-screen flex flex-col lg:flex-row">
        <!-- Sidebar Navigation -->
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-[260px] border-r border-umkm-sand/60 bg-white/95 backdrop-blur-sm transform -translate-x-full lg:translate-x-0 lg:static lg:h-screen lg:sticky lg:top-0 transition-transform duration-300 flex flex-col justify-between overflow-y-auto scrollbar-none shadow-sm">
            <div>
                <!-- Logo Section -->
                <div class="flex items-center gap-3 px-6 py-5 border-b border-umkm-sand/40 flex-shrink-0">
                    <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-umkm-sage/15 text-umkm-forest shadow-sm">
                        <i class="fa-solid fa-leaf text-base"></i>
                    </div>
                    <div>
                        <h2 class="text-xs font-bold text-umkm-brown leading-tight">UMKM Bersama Maju</h2>
                        <span class="inline-flex items-center rounded-md bg-umkm-sage/10 px-2 py-0.5 text-[9px] font-semibold text-umkm-forest mt-0.5 border border-umkm-sage/20">Admin</span>
                    </div>
                </div>

                <!-- Navigation Links -->
                <nav class="space-y-5 px-4 py-5 text-xs">
                    <!-- MENU UTAMA Group -->
                    <div>
                        <span class="px-3 text-[9px] font-bold uppercase tracking-wider text-umkm-muted/70">Menu Utama</span>
                        <div class="mt-2 space-y-0.5">
                            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-xl px-3 py-2 transition-all duration-200 {{ request()->routeIs('dashboard') ? 'bg-umkm-sage/15 text-umkm-forest font-semibold' : 'text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown' }}">
                                <i class="fa-solid fa-house-chimney text-[13px] w-5 text-center"></i>
                                Dashboard
                            </a>
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-regular fa-user text-[13px] w-5 text-center"></i>
                                Pengguna
                            </a>
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-solid fa-store text-[13px] w-5 text-center"></i>
                                UMKM
                            </a>
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-solid fa-box text-[13px] w-5 text-center"></i>
                                Produk
                            </a>
                            <a href="{{ route('orders.index') }}" class="flex items-center gap-3 rounded-xl px-3 py-2 transition-all duration-200 {{ request()->routeIs('orders.*') ? 'bg-umkm-sage/15 text-umkm-forest font-semibold' : 'text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown' }}">
                                <i class="fa-solid fa-cart-shopping text-[13px] w-5 text-center"></i>
                                Pesanan
                            </a>
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-regular fa-credit-card text-[13px] w-5 text-center"></i>
                                Pembayaran
                            </a>
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-solid fa-ticket text-[13px] w-5 text-center"></i>
                                Voucher
                            </a>
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-solid fa-tags text-[13px] w-5 text-center"></i>
                                Kategori
                            </a>
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-regular fa-comment-dots text-[13px] w-5 text-center"></i>
                                Ulasan
                            </a>
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-solid fa-chart-simple text-[13px] w-5 text-center"></i>
                                Laporan
                            </a>
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-solid fa-bullhorn text-[13px] w-5 text-center"></i>
                                Banner & Promo
                            </a>
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-solid fa-gear text-[13px] w-5 text-center"></i>
                                Pengaturan
                            </a>
                        </div>
                    </div>

                    <!-- PENGELOLAAN SISTEM Group -->
                    <div>
                        <span class="px-3 text-[9px] font-bold uppercase tracking-wider text-umkm-muted/70">Pengelolaan Sistem</span>
                        <div class="mt-2 space-y-0.5">
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-solid fa-user-shield text-[13px] w-5 text-center"></i>
                                Admin
                            </a>
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-solid fa-key text-[13px] w-5 text-center"></i>
                                Role & Permission
                            </a>
                            <a href="#" class="flex items-center gap-3 rounded-xl px-3 py-2 text-umkm-muted hover:bg-umkm-sand/40 hover:text-umkm-brown transition-all duration-200">
                                <i class="fa-solid fa-clock-rotate-left text-[13px] w-5 text-center"></i>
                                Log Aktivitas
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Quick Actions Section -->
            <div class="p-4 flex-shrink-0">
                <div class="bg-umkm-sage/5 border border-umkm-sand/60 rounded-2xl p-4">
                    <span class="text-[9px] font-bold uppercase tracking-wider text-umkm-forest block mb-3">Quick Actions</span>
                    <div class="space-y-2 text-xs">
                        <a href="#" class="flex items-center gap-2 font-semibold text-umkm-sage hover:text-umkm-forest transition-colors">
                            <i class="fa-regular fa-square-plus text-sm"></i>
                            Tambah Produk
                        </a>
                        <a href="#" class="flex items-center gap-2 font-semibold text-umkm-sage hover:text-umkm-forest transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Tambah UMKM
                        </a>
                        <a href="#" class="flex items-center gap-2 font-semibold text-umkm-sage hover:text-umkm-forest transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>
                            Buat Voucher
                        </a>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Wrapper -->
        <div class="flex-grow flex flex-col min-h-screen overflow-x-hidden">
            <!-- Top Header -->
            <header class="sticky top-0 z-40 bg-white/90 backdrop-blur-sm border-b border-umkm-sand/60 px-4 py-3 sm:px-6 lg:px-8 flex items-center justify-between shadow-sm">
                <!-- Left: Hamburger & Search -->
                <div class="flex items-center gap-4 flex-1 max-w-xl">
                    <button id="toggleSidebar" class="p-2 hover:bg-umkm-sand/40 rounded-lg text-umkm-muted lg:hidden focus:outline-none transition-colors">
                        <i class="fa-solid fa-bars text-lg"></i>
                    </button>
                    <!-- Search Bar -->
                    <div class="relative w-full hidden sm:block">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-umkm-muted/60">
                            <i class="fa-solid fa-magnifying-glass text-xs"></i>
                        </span>
                        <input type="text" placeholder="Cari data, pengguna, produk, pesanan..." class="w-full bg-umkm-cream/50 border border-umkm-sand/60 rounded-xl py-2 pl-10 pr-16 text-xs text-umkm-brown placeholder:text-umkm-muted/50 focus:outline-none focus:ring-1 focus:ring-umkm-sage focus:bg-white transition-all duration-200">
                        <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <kbd class="hidden md:inline-block px-1.5 py-0.5 text-[9px] font-semibold text-umkm-muted bg-white border border-umkm-sand rounded-md shadow-sm">Ctrl + K</kbd>
                        </span>
                    </div>
                </div>

                <!-- Right: Notifications & Profile -->
                <div class="flex items-center gap-4">
                    <!-- Notifications -->
                    <button class="relative p-2 hover:bg-umkm-sand/40 rounded-xl text-umkm-muted transition-colors focus:outline-none">
                        <i class="fa-regular fa-bell text-lg"></i>
                        <span class="absolute top-2 right-2 flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                        </span>
                    </button>

                    <!-- Profile Dropdown -->
                    <div class="relative" id="profileDropdownContainer">
                        <button id="profileDropdownBtn" class="flex items-center gap-3 hover:bg-umkm-sand/40 rounded-xl p-1.5 transition-colors focus:outline-none">
                            <div class="h-8 w-8 rounded-full bg-umkm-sage/10 text-umkm-forest font-bold flex items-center justify-center overflow-hidden border border-umkm-sand/60 flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80" alt="Admin Avatar" class="h-full w-full object-cover">
                            </div>
                            <div class="hidden md:block text-left">
                                <p class="text-xs font-bold text-umkm-brown leading-none">{{ auth()->user() ? auth()->user()->name : 'Admin Utama' }}</p>
                                <span class="text-[9px] text-umkm-muted font-medium">Super Admin</span>
                            </div>
                            <i class="fa-solid fa-chevron-down text-umkm-muted/60 text-[9px] hidden md:block"></i>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="profileDropdown" class="absolute right-0 mt-2 w-48 bg-white border border-umkm-sand/60 rounded-2xl shadow-lg py-1 hidden transform opacity-0 scale-95 transition-all duration-200 origin-top-right z-50">
                            <a href="#" class="flex items-center gap-2 px-4 py-2.5 text-xs text-umkm-muted hover:bg-umkm-sand/30 hover:text-umkm-brown transition-colors">
                                <i class="fa-regular fa-user w-4"></i> Profil Saya
                            </a>
                            <a href="#" class="flex items-center gap-2 px-4 py-2.5 text-xs text-umkm-muted hover:bg-umkm-sand/30 hover:text-umkm-brown transition-colors">
                                <i class="fa-solid fa-gear w-4"></i> Pengaturan
                            </a>
                            <hr class="border-umkm-sand/60 my-1">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center gap-2 px-4 py-2.5 text-xs text-red-500 hover:bg-red-50 transition-colors">
                                <i class="fa-solid fa-right-from-bracket w-4"></i> Keluar
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-grow p-4 sm:p-6 lg:p-8">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Mobile Sidebar Backdrop -->
    <div id="sidebarBackdrop" class="fixed inset-0 z-40 bg-umkm-brown/30 backdrop-blur-sm hidden lg:hidden"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sidebar Mobile Toggle
            const toggleSidebar = document.getElementById('toggleSidebar');
            const sidebar = document.getElementById('sidebar');
            const backdrop = document.getElementById('sidebarBackdrop');

            if (toggleSidebar && sidebar && backdrop) {
                const openSidebar = () => {
                    sidebar.classList.remove('-translate-x-full');
                    backdrop.classList.remove('hidden');
                };

                const closeSidebar = () => {
                    sidebar.classList.add('-translate-x-full');
                    backdrop.classList.add('hidden');
                };

                toggleSidebar.addEventListener('click', openSidebar);
                backdrop.addEventListener('click', closeSidebar);
            }

            // Profile Dropdown Toggle
            const profileBtn = document.getElementById('profileDropdownBtn');
            const profileMenu = document.getElementById('profileDropdown');

            if (profileBtn && profileMenu) {
                profileBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    if (profileMenu.classList.contains('hidden')) {
                        profileMenu.classList.remove('hidden');
                        setTimeout(() => {
                            profileMenu.classList.remove('opacity-0', 'scale-95');
                            profileMenu.classList.add('opacity-100', 'scale-100');
                        }, 10);
                    } else {
                        profileMenu.classList.remove('opacity-100', 'scale-100');
                        profileMenu.classList.add('opacity-0', 'scale-95');
                        setTimeout(() => {
                            profileMenu.classList.add('hidden');
                        }, 200);
                    }
                });

                document.addEventListener('click', function() {
                    if (!profileMenu.classList.contains('hidden')) {
                        profileMenu.classList.remove('opacity-100', 'scale-100');
                        profileMenu.classList.add('opacity-0', 'scale-95');
                        setTimeout(() => {
                            profileMenu.classList.add('hidden');
                        }, 200);
                    }
                });
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
