<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $dashboardUrl = fn (?string $fragment = null): string => route('dashboard').($fragment ? '#'.$fragment : '');

        return view('dashboard', [
            'dashboardUrl' => $dashboardUrl,
            'flashSaleProducts' => $this->products(flash: true),
            'recommendedProducts' => $this->products(flash: false),
            'favoriteShops' => [
                ['name' => 'Kopi Gayo ID', 'img' => 'https://images.unsplash.com/photo-1497935586351-b67a49e012bf?auto=format&fit=crop&w=120&q=80'],
                ['name' => 'Tenun Nusantara', 'img' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=120&q=80'],
                ['name' => 'Madu Hutan', 'img' => 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=120&q=80'],
                ['name' => 'Keripik Jogja', 'img' => 'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=120&q=80'],
            ],
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
