<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $dashboardUrl = fn (?string $fragment = null): string => route('dashboard').($fragment ? '#'.$fragment : '');

        $salesTrend = [
            ['label' => '12 Mei', 'value' => 2800000],
            ['label' => '13 Mei', 'value' => 4100000],
            ['label' => '14 Mei', 'value' => 5200000],
            ['label' => '15 Mei', 'value' => 4700000],
            ['label' => '16 Mei', 'value' => 6750000],
            ['label' => '17 Mei', 'value' => 6200000],
            ['label' => '18 Mei', 'value' => 5400000],
        ];

        $values = array_column($salesTrend, 'value');
        $maxValue = max($values);
        $minValue = min($values);
        $chartPoints = [];

        foreach ($salesTrend as $index => $item) {
            $x = 28 + ($index * 44);
            $y = 130 - (($item['value'] - $minValue) / max(1, $maxValue - $minValue) * 100);
            $chartPoints[] = sprintf('%s %s', $x, $y);
        }

        return view('dashboard', [
            'dashboardUrl' => $dashboardUrl,
            'stats' => [
                ['title' => 'Total Pendapatan', 'value' => 'Rp 24.850.000', 'trend' => '12,5% dari periode lalu', 'icon' => 'Rp'],
                ['title' => 'Total Pesanan', 'value' => '128', 'trend' => '8,3% dari periode lalu', 'icon' => '🛒'],
                ['title' => 'Total UMKM', 'value' => '86', 'trend' => '10,2% dari periode lalu', 'icon' => '🏪'],
                ['title' => 'Total Produk', 'value' => '342', 'trend' => '15,7% dari periode lalu', 'icon' => '📦'],
            ],
            'recentOrders' => [
                ['invoice' => '#INV/2024/05/009', 'customer' => 'Budi Santoso', 'shop' => 'Kopi Gayo ID', 'total' => 'Rp 285.000', 'status' => 'Selesai', 'date' => '18 Mei 2024', 'badge' => 'success'],
                ['invoice' => '#INV/2024/05/008', 'customer' => 'Siti Aisyah', 'shop' => 'Keripik Jogja', 'total' => 'Rp 150.000', 'status' => 'Dikirim', 'date' => '18 Mei 2024', 'badge' => 'info'],
                ['invoice' => '#INV/2024/05/007', 'customer' => 'Andi Wijaya', 'shop' => 'Tenun Nusantara', 'total' => 'Rp 350.000', 'status' => 'Diproses', 'date' => '17 Mei 2024', 'badge' => 'warning'],
                ['invoice' => '#INV/2024/05/006', 'customer' => 'Dewi Lestari', 'shop' => 'Madu Hutan', 'total' => 'Rp 120.000', 'status' => 'Selesai', 'date' => '17 Mei 2024', 'badge' => 'success'],
                ['invoice' => '#INV/2024/05/005', 'customer' => 'Rizky Pratama', 'shop' => 'Tas Anyaman', 'total' => 'Rp 175.000', 'status' => 'Dibatalkan', 'date' => '17 Mei 2024', 'badge' => 'danger'],
            ],
            'latestUmkms' => [
                ['name' => 'Kopi Gayo ID', 'owner' => 'Fahri Ramadhan', 'products' => 12, 'joined' => '18 Mei 2024'],
                ['name' => 'Keripik Jogja', 'owner' => 'Dewi Sartika', 'products' => 8, 'joined' => '17 Mei 2024'],
                ['name' => 'Madu Hutan', 'owner' => 'Rudi Hermawan', 'products' => 6, 'joined' => '16 Mei 2024'],
                ['name' => 'Tenun Nusantara', 'owner' => 'Siti Nurhaliza', 'products' => 10, 'joined' => '15 Mei 2024'],
                ['name' => 'Tas Anyaman', 'owner' => 'Budi Setiawan', 'products' => 7, 'joined' => '14 Mei 2024'],
            ],
            'topProducts' => [
                ['name' => 'Kopi Gayo Premium 250g', 'sold' => 124, 'revenue' => 'Rp 16.120.000'],
                ['name' => 'Keripik Singkong Pedas 250g', 'sold' => 98, 'revenue' => 'Rp 9.800.000'],
                ['name' => 'Madu Hutan Asli 500ml', 'sold' => 76, 'revenue' => 'Rp 7.600.000'],
                ['name' => 'Tenun Nusantara', 'sold' => 55, 'revenue' => 'Rp 6.050.000'],
                ['name' => 'Tas Anyaman Eceng Gondok', 'sold' => 41, 'revenue' => 'Rp 4.100.000'],
            ],
            'salesTrend' => $salesTrend,
            'salesChartPath' => implode(' ', $chartPoints),
            'salesMax' => $maxValue,
            'salesMin' => $minValue,
        ]);
    }

    /**
     * @return list<array{name: string, price: int, original: int|null, discount: int|null, rating: float, sold: int, img: string}>
     */
    private function products(bool $flash): array
    {
        $all = [
            ['name' => 'Tas Anyaman Eceng Gondok', 'price' => 78000, 'original' => 112000, 'discount' => 30, 'rating' => 4.8, 'sold' => 120, 'img' => 'https://images.unsplash.com/photo-1610701596007-11502817dcfe?auto=format&fit=crop&w=400&q=80'],
            ['name' => 'Kopi Gayo Premium 250g', 'price' => 65000, 'original' => 95000, 'discount' => 32, 'rating' => 4.9, 'sold' => 89, 'img' => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&w=400&q=80'],
            ['name' => 'Madu Hutan Asli 500ml', 'price' => 120000, 'original' => 150000, 'discount' => 20, 'rating' => 4.9, 'sold' => 89, 'img' => 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=400&q=80'],
            ['name' => 'Keripik Singkong Pedas', 'price' => 25000, 'original' => 32000, 'discount' => 22, 'rating' => 4.7, 'sold' => 340, 'img' => 'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=400&q=80'],
            ['name' => 'Batik Tulis Motif Parang', 'price' => 350000, 'original' => null, 'discount' => null, 'rating' => 4.9, 'sold' => 45, 'img' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=400&q=80'],
            ['name' => 'Tas Anyaman Rotan', 'price' => 175000, 'original' => null, 'discount' => null, 'rating' => 4.6, 'sold' => 67, 'img' => 'https://images.unsplash.com/photo-1610701596007-11502817dcfe?auto=format&fit=crop&w=400&q=80'],
            ['name' => 'Sambal Bawang Homemade', 'price' => 35000, 'original' => 45000, 'discount' => 22, 'rating' => 4.8, 'sold' => 210, 'img' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=400&q=80'],
        ];

        return $flash
            ? array_values(array_filter($all, fn ($p) => $p['discount'] !== null))
            : $all;
    }
}
