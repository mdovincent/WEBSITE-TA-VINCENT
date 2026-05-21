@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Welcome Header & Date Picker -->
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-xl font-bold text-umkm-brown flex items-center gap-2">
                Selamat datang, Admin! 👋
            </h1>
            <p class="text-xs text-umkm-muted mt-1">Berikut ringkasan data platform UMKM Bersama Maju.</p>
        </div>
        
        <!-- Date Picker Dropdown -->
        <button class="inline-flex items-center gap-2.5 bg-white border border-umkm-sand/70 rounded-xl px-4 py-2 text-xs font-semibold text-umkm-brown hover:bg-umkm-sand/20 transition shadow-sm focus:outline-none">
            <i class="fa-regular fa-calendar text-umkm-sage"></i>
            <span>18 Mei 2024 - 18 Mei 2024</span>
            <i class="fa-solid fa-chevron-down text-umkm-muted/60 text-[10px] ml-1"></i>
        </button>
    </div>

    <!-- Stat Cards Grid -->
    <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
        <!-- Stat Card 1 -->
        <div class="bg-white/80 border border-umkm-sand/80 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-umkm-sage/30 transition-all duration-200">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-umkm-muted">Total Pendapatan</span>
                    <h3 class="text-lg font-bold text-umkm-brown mt-1">Rp 24.850.000</h3>
                    <p class="text-[10px] font-semibold text-emerald-600 mt-2 flex items-center gap-1">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                        <span>12.5%</span>
                        <span class="text-umkm-muted font-medium">dari periode lalu</span>
                    </p>
                </div>
                <div class="h-10 w-10 rounded-full bg-umkm-sage/10 text-umkm-forest flex items-center justify-center font-bold text-sm shadow-inner flex-shrink-0">
                    <i class="fa-solid fa-dollar-sign text-base"></i>
                </div>
            </div>
        </div>

        <!-- Stat Card 2 -->
        <div class="bg-white/80 border border-umkm-sand/80 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-umkm-sage/30 transition-all duration-200">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-umkm-muted">Total Pesanan</span>
                    <h3 class="text-lg font-bold text-umkm-brown mt-1">128</h3>
                    <p class="text-[10px] font-semibold text-emerald-600 mt-2 flex items-center gap-1">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                        <span>8.3%</span>
                        <span class="text-umkm-muted font-medium">dari periode lalu</span>
                    </p>
                </div>
                <div class="h-10 w-10 rounded-full bg-umkm-sage/10 text-umkm-forest flex items-center justify-center font-bold text-sm shadow-inner flex-shrink-0">
                    <i class="fa-solid fa-bag-shopping text-base"></i>
                </div>
            </div>
        </div>

        <!-- Stat Card 3 -->
        <div class="bg-white/80 border border-umkm-sand/80 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-umkm-sage/30 transition-all duration-200">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-umkm-muted">Total UMKM</span>
                    <h3 class="text-lg font-bold text-umkm-brown mt-1">86</h3>
                    <p class="text-[10px] font-semibold text-emerald-600 mt-2 flex items-center gap-1">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                        <span>10.2%</span>
                        <span class="text-umkm-muted font-medium">dari periode lalu</span>
                    </p>
                </div>
                <div class="h-10 w-10 rounded-full bg-umkm-sage/10 text-umkm-forest flex items-center justify-center font-bold text-sm shadow-inner flex-shrink-0">
                    <i class="fa-solid fa-store text-sm"></i>
                </div>
            </div>
        </div>

        <!-- Stat Card 4 -->
        <div class="bg-white/80 border border-umkm-sand/80 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-umkm-sage/30 transition-all duration-200">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-umkm-muted">Total Produk</span>
                    <h3 class="text-lg font-bold text-umkm-brown mt-1">342</h3>
                    <p class="text-[10px] font-semibold text-emerald-600 mt-2 flex items-center gap-1">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                        <span>15.7%</span>
                        <span class="text-umkm-muted font-medium">dari periode lalu</span>
                    </p>
                </div>
                <div class="h-10 w-10 rounded-full bg-umkm-sage/10 text-umkm-forest flex items-center justify-center font-bold text-sm shadow-inner flex-shrink-0">
                    <i class="fa-solid fa-cubes text-base"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid gap-6 grid-cols-1 lg:grid-cols-3">
        
        <!-- Left 2 Columns: Tables -->
        <div class="lg:col-span-2 space-y-6">
            
            <!-- Pesanan Terbaru Card -->
            <div class="bg-white/80 border border-umkm-sand/80 rounded-2xl shadow-sm overflow-hidden">
                <div class="px-5 py-4 border-b border-umkm-sand/50 flex items-center justify-between">
                    <div>
                        <h2 class="text-sm font-bold text-umkm-brown">Pesanan Terbaru</h2>
                    </div>
                    <a href="{{ route('orders.index') }}" class="inline-flex items-center rounded-xl border border-umkm-sand/70 bg-white px-3 py-1.5 text-xs font-semibold text-umkm-muted hover:bg-umkm-sand/20 hover:text-umkm-brown transition shadow-sm">
                        Lihat Semua
                    </a>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-umkm-sand/20 text-[10px] font-bold uppercase tracking-wider text-umkm-muted border-b border-umkm-sand/50">
                                <th class="px-5 py-3">ID Pesanan</th>
                                <th class="px-5 py-3">Pelanggan</th>
                                <th class="px-5 py-3">UMKM / Toko</th>
                                <th class="px-5 py-3">Total</th>
                                <th class="px-5 py-3">Status</th>
                                <th class="px-5 py-3">Tanggal</th>
                                <th class="px-5 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-umkm-sand/30">
                            @php
                                $orderAvatars = [
                                    'Budi Santoso' => 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=80&h=80&q=80',
                                    'Siti Aisyah' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=80&h=80&q=80',
                                    'Andi Wijaya' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&h=80&q=80',
                                    'Dewi Lestari' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=80&h=80&q=80',
                                    'Rizky Pratama' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80'
                                ];
                                $orderStatusBadges = [
                                    'Selesai' => 'bg-emerald-50 text-emerald-600 border border-emerald-100',
                                    'Dikirim' => 'bg-blue-50 text-blue-600 border border-blue-100',
                                    'Diproses' => 'bg-amber-50 text-amber-600 border border-amber-100',
                                    'Dibatalkan' => 'bg-rose-50 text-rose-600 border border-rose-100'
                                ];
                            @endphp
                            @foreach ($recentOrders as $order)
                                <tr class="hover:bg-umkm-sand/20 transition">
                                    <td class="px-5 py-3 font-semibold text-umkm-forest hover:text-umkm-sage">{{ $order['invoice'] }}</td>
                                    <td class="px-5 py-3">
                                        <div class="flex items-center gap-2">
                                            <div class="h-6 w-6 rounded-full bg-umkm-sand/60 overflow-hidden border border-umkm-sand/60">
                                                <img src="{{ $orderAvatars[$order['customer']] ?? 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=80&h=80&q=80' }}" alt="Avatar" class="h-full w-full object-cover">
                                            </div>
                                            <span class="font-medium text-umkm-brown">{{ $order['customer'] }}</span>
                                        </div>
                                    </td>
                                    <td class="px-5 py-3 text-umkm-muted">{{ $order['shop'] }}</td>
                                    <td class="px-5 py-3 font-semibold text-umkm-brown">{{ $order['total'] }}</td>
                                    <td class="px-5 py-3">
                                        <span class="inline-flex items-center rounded-md px-2 py-0.5 text-[10px] font-semibold {{ $orderStatusBadges[$order['status']] ?? 'bg-umkm-sand/30 text-umkm-muted' }}">
                                            {{ $order['status'] }}
                                        </span>
                                    </td>
                                    <td class="px-5 py-3 text-umkm-muted/70 text-[10px] font-medium leading-normal">
                                        {{ $order['date'] }}<br><span class="text-umkm-muted/40">10.30</span>
                                    </td>
                                    <td class="px-5 py-3">
                                        <div class="flex items-center justify-center gap-1">
                                            <button class="h-6 w-6 rounded-md border border-umkm-sand/70 hover:bg-umkm-sand/40 text-umkm-muted hover:text-umkm-brown transition flex items-center justify-center focus:outline-none" title="Lihat Detail">
                                                <i class="fa-regular fa-eye text-[11px]"></i>
                                            </button>
                                            <button class="h-6 w-6 rounded-md border border-umkm-sand/70 hover:bg-umkm-sage/10 text-umkm-muted hover:text-umkm-forest transition flex items-center justify-center focus:outline-none" title="Edit">
                                                <i class="fa-regular fa-pen-to-square text-[11px]"></i>
                                            </button>
                                            <button class="h-6 w-6 rounded-md border border-rose-100 hover:bg-rose-50 text-rose-400 hover:text-rose-600 transition flex items-center justify-center focus:outline-none" title="Hapus">
                                                <i class="fa-regular fa-trash-can text-[11px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- UMKM Terbaru Card -->
            <div class="bg-white/80 border border-umkm-sand/80 rounded-2xl shadow-sm overflow-hidden">
                <div class="px-5 py-4 border-b border-umkm-sand/50 flex items-center justify-between">
                    <div>
                        <h2 class="text-sm font-bold text-umkm-brown">UMKM Terbaru</h2>
                    </div>
                    <a href="#" class="inline-flex items-center rounded-xl border border-umkm-sand/70 bg-white px-3 py-1.5 text-xs font-semibold text-umkm-muted hover:bg-umkm-sand/20 hover:text-umkm-brown transition shadow-sm">
                        Lihat Semua
                    </a>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-umkm-sand/20 text-[10px] font-bold uppercase tracking-wider text-umkm-muted border-b border-umkm-sand/50">
                                <th class="px-5 py-3">Nama UMKM</th>
                                <th class="px-5 py-3">Pemilik</th>
                                <th class="px-5 py-3">Produk</th>
                                <th class="px-5 py-3">Bergabung</th>
                                <th class="px-5 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-umkm-sand/30">
                            @php
                                $umkmLogos = [
                                    'Kopi Gayo ID' => 'https://images.unsplash.com/photo-1507133750040-4a8f57021571?auto=format&fit=crop&w=80&h=80&q=80',
                                    'Keripik Jogja' => 'https://images.unsplash.com/photo-1600431521340-491eca880813?auto=format&fit=crop&w=80&h=80&q=80',
                                    'Madu Hutan' => 'https://images.unsplash.com/photo-1558642452-9d2a7deb7f62?auto=format&fit=crop&w=80&h=80&q=80',
                                    'Tenun Nusantara' => 'https://images.unsplash.com/photo-1528719478250-c89cae4dc85b?auto=format&fit=crop&w=80&h=80&q=80',
                                    'Tas Anyaman' => 'https://images.unsplash.com/photo-1610701596007-11502817dcfe?auto=format&fit=crop&w=80&h=80&q=80'
                                ];
                            @endphp
                            @foreach ($latestUmkms as $umkm)
                                <tr class="hover:bg-umkm-sand/20 transition">
                                    <td class="px-5 py-3">
                                        <div class="flex items-center gap-2.5">
                                            <div class="h-6 w-6 rounded bg-umkm-sand/60 overflow-hidden border border-umkm-sand/60 flex-shrink-0">
                                                <img src="{{ $umkmLogos[$umkm['name']] ?? 'https://images.unsplash.com/photo-1507133750040-4a8f57021571?auto=format&fit=crop&w=80&h=80&q=80' }}" alt="Logo" class="h-full w-full object-cover">
                                            </div>
                                            <span class="font-semibold text-umkm-brown">{{ $umkm['name'] }}</span>
                                        </div>
                                    </td>
                                    <td class="px-5 py-3 text-umkm-muted font-medium">{{ $umkm['owner'] }}</td>
                                    <td class="px-5 py-3 font-semibold text-umkm-brown">{{ $umkm['products'] }}</td>
                                    <td class="px-5 py-3 text-umkm-muted font-medium">{{ $umkm['joined'] }}</td>
                                    <td class="px-5 py-3">
                                        <div class="flex items-center justify-center gap-1">
                                            <button class="h-6 w-6 rounded-md border border-umkm-sand/70 hover:bg-umkm-sand/40 text-umkm-muted hover:text-umkm-brown transition flex items-center justify-center focus:outline-none" title="Lihat Detail">
                                                <i class="fa-regular fa-eye text-[11px]"></i>
                                            </button>
                                            <button class="h-6 w-6 rounded-md border border-umkm-sand/70 hover:bg-umkm-sage/10 text-umkm-muted hover:text-umkm-forest transition flex items-center justify-center focus:outline-none" title="Edit">
                                                <i class="fa-regular fa-pen-to-square text-[11px]"></i>
                                            </button>
                                            <button class="h-6 w-6 rounded-md border border-rose-100 hover:bg-rose-50 text-rose-400 hover:text-rose-600 transition flex items-center justify-center focus:outline-none" title="Hapus">
                                                <i class="fa-regular fa-trash-can text-[11px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- Right 1 Column: Charts & Products -->
        <div class="space-y-6">
            
            <!-- Grafik Penjualan Card -->
            <div class="bg-white/80 border border-umkm-sand/80 rounded-2xl shadow-sm p-5">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-sm font-bold text-umkm-brown">Grafik Penjualan</h2>
                    
                    <!-- 7 Hari Terakhir Dropdown -->
                    <button class="inline-flex items-center gap-1.5 border border-umkm-sand/70 bg-white rounded-xl px-2.5 py-1.5 text-[10px] font-semibold text-umkm-muted hover:bg-umkm-sand/20 hover:text-umkm-brown transition focus:outline-none">
                        <span>7 Hari Terakhir</span>
                        <i class="fa-solid fa-chevron-down text-umkm-muted/60 text-[8px] ml-0.5"></i>
                    </button>
                </div>
                
                <!-- SVG Area -->
                <div class="relative w-full pt-2">
                    <svg viewBox="0 0 450 220" class="w-full h-auto overflow-visible" aria-hidden="true">
                        <!-- Horizontal Grid Lines -->
                        <line x1="45" y1="30" x2="430" y2="30" stroke="#ebe4d6" stroke-width="1.2" />
                        <line x1="45" y1="70" x2="430" y2="70" stroke="#ebe4d6" stroke-width="1.2" />
                        <line x1="45" y1="110" x2="430" y2="110" stroke="#ebe4d6" stroke-width="1.2" />
                        <line x1="45" y1="150" x2="430" y2="150" stroke="#ebe4d6" stroke-width="1.2" />
                        
                        <!-- Y-Axis Labels -->
                        <text x="35" y="34" font-size="10" fill="#6b6358" font-weight="600" text-anchor="end" font-family="Poppins, sans-serif">8 Jt</text>
                        <text x="35" y="74" font-size="10" fill="#6b6358" font-weight="600" text-anchor="end" font-family="Poppins, sans-serif">6 Jt</text>
                        <text x="35" y="114" font-size="10" fill="#6b6358" font-weight="600" text-anchor="end" font-family="Poppins, sans-serif">4 Jt</text>
                        <text x="35" y="154" font-size="10" fill="#6b6358" font-weight="600" text-anchor="end" font-family="Poppins, sans-serif">2 Jt</text>
                        
                        <!-- Gradient Definition -->
                        <defs>
                            <linearGradient id="svgGradient" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#7d8f69" stop-opacity="0.20" />
                                <stop offset="100%" stop-color="#7d8f69" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <!-- Area Under Curve -->
                        <path d="M 70 134 Q 100 121, 130 108 T 190 86 T 250 96 T 310 55 T 370 66 T 430 82 L 430 170 L 70 170 Z" fill="url(#svgGradient)" />
                        
                        <!-- Curved Line Path (Sage Green) -->
                        <path d="M 70 134 Q 100 121, 130 108 T 190 86 T 250 96 T 310 55 T 370 66 T 430 82" fill="none" stroke="#7d8f69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                        
                        <!-- Active Indicator Dotted Line on 16 Mei (Forest green) -->
                        <line x1="310" y1="55" x2="310" y2="170" stroke="#2f4a3e" stroke-dasharray="3 3" stroke-width="1.2" />
                        
                        <!-- Data Circles (Sage Green) -->
                        <circle cx="70" cy="134" r="4.5" fill="#7d8f69" stroke="#ffffff" stroke-width="1.5" />
                        <circle cx="130" cy="108" r="4.5" fill="#7d8f69" stroke="#ffffff" stroke-width="1.5" />
                        <circle cx="190" cy="86" r="4.5" fill="#7d8f69" stroke="#ffffff" stroke-width="1.5" />
                        <circle cx="250" cy="96" r="4.5" fill="#7d8f69" stroke="#ffffff" stroke-width="1.5" />
                        <!-- Highlighted 16 Mei Dot (Forest Green) -->
                        <circle cx="310" cy="55" r="6" fill="#2f4a3e" stroke="#ffffff" stroke-width="2" />
                        <circle cx="370" cy="66" r="4.5" fill="#7d8f69" stroke="#ffffff" stroke-width="1.5" />
                        <circle cx="430" cy="82" r="4.5" fill="#7d8f69" stroke="#ffffff" stroke-width="1.5" />
                        
                        <!-- X-Axis Labels -->
                        <text x="70" y="190" font-size="9" fill="#6b6358" font-weight="600" text-anchor="middle" font-family="Poppins, sans-serif">12 Mei</text>
                        <text x="130" y="190" font-size="9" fill="#6b6358" font-weight="600" text-anchor="middle" font-family="Poppins, sans-serif">13 Mei</text>
                        <text x="190" y="190" font-size="9" fill="#6b6358" font-weight="600" text-anchor="middle" font-family="Poppins, sans-serif">14 Mei</text>
                        <text x="250" y="190" font-size="9" fill="#6b6358" font-weight="600" text-anchor="middle" font-family="Poppins, sans-serif">15 Mei</text>
                        <text x="310" y="190" font-size="9" fill="#2f4a3e" font-weight="700" text-anchor="middle" font-family="Poppins, sans-serif">16 Mei</text>
                        <text x="370" y="190" font-size="9" fill="#6b6358" font-weight="600" text-anchor="middle" font-family="Poppins, sans-serif">17 Mei</text>
                        <text x="430" y="190" font-size="9" fill="#6b6358" font-weight="600" text-anchor="middle" font-family="Poppins, sans-serif">18 Mei</text>

                        <!-- Tooltip Overlay -->
                        <g transform="translate(245, 0)">
                            <rect x="0" y="0" width="126" height="42" rx="10" fill="#ffffff" stroke="#ebe4d6" stroke-width="1.5" filter="drop-shadow(0px 2px 4px rgba(44, 36, 28, 0.07))" />
                            <text x="12" y="16" font-size="9" fill="#6b6358" font-weight="600" font-family="Poppins, sans-serif">16 Mei 2024</text>
                            <text x="12" y="32" font-size="11" fill="#2f4a3e" font-weight="700" font-family="Poppins, sans-serif">Rp 6.750.000</text>
                        </g>
                    </svg>
                </div>
            </div>

            <!-- Produk Terlaris Card -->
            <div class="bg-white/80 border border-umkm-sand/80 rounded-2xl shadow-sm p-5">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-sm font-bold text-umkm-brown">Produk Terlaris</h2>
                    <a href="#" class="inline-flex items-center rounded-xl border border-umkm-sand/70 bg-white px-2.5 py-1.5 text-[10px] font-semibold text-umkm-muted hover:bg-umkm-sand/20 hover:text-umkm-brown transition shadow-sm">
                        Lihat Semua
                    </a>
                </div>
                
                <!-- Product List -->
                <div class="space-y-3.5">
                    @php
                        $productImages = [
                            'Kopi Gayo Premium 250g' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=100&h=100&q=80',
                            'Keripik Singkong Pedas 250g' => 'https://images.unsplash.com/photo-1566478989037-eec170784d0b?auto=format&fit=crop&w=100&h=100&q=80',
                            'Madu Hutan Asli 500ml' => 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=100&h=100&q=80',
                            'Tenun Nusantara' => 'https://images.unsplash.com/photo-1528719478250-c89cae4dc85b?auto=format&fit=crop&w=100&h=100&q=80',
                            'Tas Anyaman Eceng Gondok' => 'https://images.unsplash.com/photo-1590794056226-79ef3a8147e1?auto=format&fit=crop&w=100&h=100&q=80'
                        ];
                    @endphp
                    @foreach ($topProducts as $product)
                        <div class="flex items-center justify-between gap-3 bg-umkm-cream/40 p-2.5 rounded-xl border border-umkm-sand/40 hover:bg-umkm-sand/30 transition">
                            <div class="flex items-center gap-2.5">
                                <div class="h-10 w-10 rounded-lg overflow-hidden bg-umkm-sand/40 flex-shrink-0 border border-umkm-sand/60">
                                    <img src="{{ $productImages[$product['name']] ?? 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=100&h=100&q=80' }}" alt="Product Image" class="h-full w-full object-cover">
                                </div>
                                <div class="min-w-0">
                                    <h4 class="text-xs font-bold text-umkm-brown truncate max-w-[150px]">{{ $product['name'] }}</h4>
                                    <span class="text-[10px] text-umkm-muted font-medium block mt-0.5">{{ $product['sold'] }} Terjual</span>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-umkm-forest text-right flex-shrink-0">{{ $product['revenue'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
