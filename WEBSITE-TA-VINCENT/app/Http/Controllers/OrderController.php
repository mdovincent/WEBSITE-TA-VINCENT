<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(Request $request): View
    {
        $status = $request->query('status', 'semua');
        $search = trim((string) $request->query('q', ''));
        $sort = $request->query('sort', 'terbaru');

        $tabs = [
            'semua' => 'Semua',
            'diproses' => 'Diproses',
            'dikirim' => 'Dikirim',
            'selesai' => 'Selesai',
            'dibatalkan' => 'Dibatalkan',
        ];

        if (! array_key_exists($status, $tabs)) {
            $status = 'semua';
        }

        if (! in_array($sort, ['terbaru', 'terlama'], true)) {
            $sort = 'terbaru';
        }

        $allOrders = $this->orders();
        $tabCounts = [];
        foreach (array_keys($tabs) as $key) {
            $tabCounts[$key] = $key === 'semua'
                ? count($allOrders)
                : count(array_filter($allOrders, fn ($o) => $o['status'] === $key));
        }

        $orders = $status === 'semua'
            ? $allOrders
            : array_values(array_filter($allOrders, fn ($o) => $o['status'] === $status));

        if ($search !== '') {
            $needle = mb_strtolower($search);
            $orders = array_values(array_filter($orders, function ($order) use ($needle) {
                if (str_contains(mb_strtolower($order['invoice']), $needle)) {
                    return true;
                }
                if (str_contains(mb_strtolower($order['shop']), $needle)) {
                    return true;
                }
                foreach ($order['items'] as $item) {
                    if (str_contains(mb_strtolower($item['name']), $needle)) {
                        return true;
                    }
                }

                return false;
            }));
        }

        usort($orders, function ($a, $b) use ($sort) {
            $cmp = $b['sort_date'] <=> $a['sort_date'];

            return $sort === 'terlama' ? -$cmp : $cmp;
        });

        return view('orders.index', [
            'tabs' => $tabs,
            'tabCounts' => $tabCounts,
            'activeStatus' => $status,
            'orders' => $orders,
            'search' => $search,
            'sort' => $sort,
        ]);
    }

    public function show(string $invoice): View
    {
        $normalized = str_replace('-', '/', $invoice);
        $order = collect($this->orders())->first(
            fn ($o) => $o['invoice_slug'] === $invoice || $o['invoice'] === $normalized
        );

        abort_unless($order, 404);

        return view('orders.show', [
            'order' => $order,
            'timeline' => $this->timelineFor($order),
            'progressStep' => $this->progressStepFor($order['status']),
        ]);
    }

    private function progressStepFor(string $status): int
    {
        return match ($status) {
            'diproses' => 2,
            'dikirim' => 3,
            'selesai' => 4,
            default => 0,
        };
    }

    /**
     * @return list<array{label: string, sub: string|null, done: bool, current: bool}>
     */
    private function timelineFor(array $order): array
    {
        if ($order['status'] === 'dibatalkan') {
            return [
                ['label' => 'Pesanan dibuat', 'sub' => $order['date'], 'done' => true, 'current' => false],
                ['label' => 'Pesanan dibatalkan', 'sub' => 'Pembayaran tidak diselesaikan', 'done' => true, 'current' => true],
            ];
        }

        $status = $order['status'];

        return [
            ['label' => 'Pesanan dibuat', 'sub' => $order['date'], 'done' => true, 'current' => false],
            ['label' => 'Pembayaran dikonfirmasi', 'sub' => $order['payment'], 'done' => true, 'current' => false],
            [
                'label' => 'Sedang dikemas',
                'sub' => $order['shop'],
                'done' => in_array($status, ['dikirim', 'selesai'], true),
                'current' => $status === 'diproses',
            ],
            [
                'label' => 'Dalam pengiriman',
                'sub' => $order['shipping'],
                'done' => $status === 'selesai',
                'current' => $status === 'dikirim',
            ],
            [
                'label' => 'Pesanan selesai',
                'sub' => $status === 'selesai' ? 'Terima kasih telah berbelanja' : null,
                'done' => $status === 'selesai',
                'current' => false,
            ],
        ];
    }

    /**
     * @return list<array{
     *     id: string,
     *     invoice: string,
     *     invoice_slug: string,
     *     status: string,
     *     status_label: string,
     *     date: string,
     *     sort_date: string,
     *     total: int,
     *     product_count: int,
     *     shop: string,
     *     shipping: string,
     *     payment: string,
     *     items: list<array{name: string, qty: int, price: int, img: string}>
     * }>
     */
    private function orders(): array
    {
        return [
            [
                'id' => '001',
                'invoice' => 'INV/2024/05/001',
                'invoice_slug' => 'INV-2024-05-001',
                'status' => 'diproses',
                'status_label' => 'Diproses',
                'date' => '20 Mei 2024',
                'sort_date' => '2024-05-20',
                'total' => 150_000,
                'product_count' => 2,
                'shop' => 'Keripik Jogja',
                'shipping' => 'JNE Reguler',
                'payment' => 'Transfer Bank',
                'items' => [
                    ['name' => 'Keripik Singkong Pedas', 'qty' => 2, 'price' => 25_000, 'img' => 'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=120&q=80'],
                    ['name' => 'Sambal Bawang Homemade', 'qty' => 2, 'price' => 50_000, 'img' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=120&q=80'],
                ],
            ],
            [
                'id' => '002',
                'invoice' => 'INV/2024/05/002',
                'invoice_slug' => 'INV-2024-05-002',
                'status' => 'dikirim',
                'status_label' => 'Dikirim',
                'date' => '18 Mei 2024',
                'sort_date' => '2024-05-18',
                'total' => 285_000,
                'product_count' => 3,
                'shop' => 'Kopi Gayo ID',
                'shipping' => 'J&T Express',
                'payment' => 'E-Wallet',
                'items' => [
                    ['name' => 'Kopi Gayo Premium 250g', 'qty' => 2, 'price' => 65_000, 'img' => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&w=120&q=80'],
                    ['name' => 'Madu Hutan Asli 500ml', 'qty' => 1, 'price' => 120_000, 'img' => 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=120&q=80'],
                    ['name' => 'Tas Anyaman Eceng Gondok', 'qty' => 1, 'price' => 35_000, 'img' => 'https://images.unsplash.com/photo-1610701596007-11502817dcfe?auto=format&fit=crop&w=120&q=80'],
                ],
            ],
            [
                'id' => '003',
                'invoice' => 'INV/2024/05/003',
                'invoice_slug' => 'INV-2024-05-003',
                'status' => 'selesai',
                'status_label' => 'Selesai',
                'date' => '15 Mei 2024',
                'sort_date' => '2024-05-15',
                'total' => 420_000,
                'product_count' => 1,
                'shop' => 'Tenun Nusantara',
                'shipping' => 'SiCepat',
                'payment' => 'COD',
                'items' => [
                    ['name' => 'Batik Tulis Motif Parang', 'qty' => 1, 'price' => 350_000, 'img' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=120&q=80'],
                ],
            ],
            [
                'id' => '004',
                'invoice' => 'INV/2024/04/028',
                'invoice_slug' => 'INV-2024-04-028',
                'status' => 'selesai',
                'status_label' => 'Selesai',
                'date' => '28 Apr 2024',
                'sort_date' => '2024-04-28',
                'total' => 78_000,
                'product_count' => 1,
                'shop' => 'Keripik Jogja',
                'shipping' => 'JNE Reguler',
                'payment' => 'Transfer Bank',
                'items' => [
                    ['name' => 'Keripik Singkong Original', 'qty' => 3, 'price' => 25_000, 'img' => 'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=120&q=80'],
                ],
            ],
            [
                'id' => '005',
                'invoice' => 'INV/2024/04/019',
                'invoice_slug' => 'INV-2024-04-019',
                'status' => 'dibatalkan',
                'status_label' => 'Dibatalkan',
                'date' => '19 Apr 2024',
                'sort_date' => '2024-04-19',
                'total' => 175_000,
                'product_count' => 1,
                'shop' => 'Tenun Nusantara',
                'shipping' => '—',
                'payment' => 'Transfer Bank',
                'items' => [
                    ['name' => 'Tas Anyaman Rotan', 'qty' => 1, 'price' => 175_000, 'img' => 'https://images.unsplash.com/photo-1610701596007-11502817dcfe?auto=format&fit=crop&w=120&q=80'],
                ],
            ],
            [
                'id' => '006',
                'invoice' => 'INV/2024/05/004',
                'invoice_slug' => 'INV-2024-05-004',
                'status' => 'diproses',
                'status_label' => 'Diproses',
                'date' => '21 Mei 2024',
                'sort_date' => '2024-05-21',
                'total' => 95_000,
                'product_count' => 2,
                'shop' => 'Madu Hutan',
                'shipping' => 'AnterAja',
                'payment' => 'E-Wallet',
                'items' => [
                    ['name' => 'Madu Hutan Asli 250ml', 'qty' => 1, 'price' => 65_000, 'img' => 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=120&q=80'],
                    ['name' => 'Keripik Singkong Pedas', 'qty' => 1, 'price' => 25_000, 'img' => 'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=120&q=80'],
                ],
            ],
        ];
    }
}
