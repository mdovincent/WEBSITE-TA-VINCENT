<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CartController extends Controller
{
    public function index(): View
    {
        $shops = self::shopsData();

        return view('cart.index', [
            'shops' => $shops,
            'cartCount' => self::countItems($shops),
            'voucher' => [
                'code' => 'UMKM10',
                'label' => 'Gratis ongkir Rp10.000',
                'discount' => 10_000,
            ],
            'shippingPerShop' => 15_000,
        ]);
    }

    public static function countItems(array $shops): int
    {
        return array_sum(array_map(
            fn ($shop) => count($shop['items']),
            $shops
        ));
    }

    /**
     * @return list<array{
     *     id: string,
     *     name: string,
     *     img: string,
     *     items: list<array{
     *         id: string,
     *         name: string,
     *         variant: string|null,
     *         price: int,
     *         qty: int,
     *         img: string,
     *         selected: bool
     *     }>
     * }>
     */
    public static function shopsData(): array
    {
        return (new self)->shops();
    }

    private function shops(): array
    {
        return [
            [
                'id' => 'keripik-jogja',
                'name' => 'Keripik Jogja',
                'img' => 'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=80&q=80',
                'items' => [
                    [
                        'id' => 'kj-1',
                        'name' => 'Keripik Singkong Pedas 250g',
                        'variant' => 'Pedas',
                        'price' => 25_000,
                        'qty' => 2,
                        'img' => 'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=120&q=80',
                        'selected' => true,
                    ],
                    [
                        'id' => 'kj-2',
                        'name' => 'Sambal Bawang Homemade',
                        'variant' => null,
                        'price' => 35_000,
                        'qty' => 1,
                        'img' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=120&q=80',
                        'selected' => false,
                    ],
                ],
            ],
            [
                'id' => 'kopi-gayo',
                'name' => 'Kopi Gayo ID',
                'img' => 'https://images.unsplash.com/photo-1497935586351-b67a49e012bf?auto=format&fit=crop&w=80&q=80',
                'items' => [
                    [
                        'id' => 'kg-1',
                        'name' => 'Kopi Gayo Premium 250g',
                        'variant' => 'Biji Utuh',
                        'price' => 65_000,
                        'qty' => 1,
                        'img' => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&w=120&q=80',
                        'selected' => true,
                    ],
                ],
            ],
        ];
    }
}
