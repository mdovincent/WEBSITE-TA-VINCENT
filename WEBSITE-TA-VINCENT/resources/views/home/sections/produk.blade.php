<section class="scroll-mt-24 border-t border-umkm-sand/80 bg-umkm-cream py-16 sm:py-20" id="produk">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="inline-block rounded-full bg-white px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-umkm-muted ring-1 ring-umkm-sand/80">Produk Pilihan</p>
            <h2 class="mx-auto mt-4 max-w-3xl text-2xl font-bold text-umkm-brown sm:text-3xl">Produk UMKM Terbaik untuk Anda</h2>
            <p class="mx-auto mt-3 max-w-2xl text-sm text-umkm-muted sm:text-base">Kurasi produk berkualitas dari pelaku usaha kecil menengah di seluruh Indonesia.</p>
        </div>

        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @php
                $products = [
                    ['name' => 'Kopi Gayo Premium', 'seller' => 'UMKM Aceh', 'price' => 'Rp 85.000', 'img' => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&w=500&q=80'],
                    ['name' => 'Madu Hutan Asli', 'seller' => 'Lebah Nusantara', 'price' => 'Rp 120.000', 'img' => 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=500&q=80'],
                    ['name' => 'Keripik Singkong', 'seller' => 'Camilan Jogja', 'price' => 'Rp 25.000', 'img' => 'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=500&q=80'],
                    ['name' => 'Batik Tulis Motif', 'seller' => 'Batik Solo', 'price' => 'Rp 350.000', 'img' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=500&q=80'],
                    ['name' => 'Tas Anyaman Rotan', 'seller' => 'Kerajinan Bali', 'price' => 'Rp 175.000', 'img' => 'https://images.unsplash.com/photo-1610701596007-11502817dcfe?auto=format&fit=crop&w=500&q=80'],
                    ['name' => 'Sambal Bawang Homemade', 'seller' => 'Rempah Nusantara', 'price' => 'Rp 35.000', 'img' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=500&q=80'],
                    ['name' => 'Gerabah Tanah Liat', 'seller' => 'Gerabah Lombok', 'price' => 'Rp 95.000', 'img' => 'https://images.unsplash.com/photo-1610701596100-87b74d1c7ea5?auto=format&fit=crop&w=500&q=80'],
                    ['name' => 'Teh Hijau Organik', 'seller' => 'Kebun Bandung', 'price' => 'Rp 55.000', 'img' => 'https://images.unsplash.com/photo-1497935586351-b67a49e012bf?auto=format&fit=crop&w=500&q=80'],
                ];
            @endphp
            @foreach ($products as $product)
                <article class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-umkm-sand/60 transition hover:-translate-y-0.5 hover:shadow-md">
                    <div class="overflow-hidden">
                        <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" class="aspect-square w-full object-cover transition duration-300 group-hover:scale-105" width="500" height="500" loading="lazy">
                    </div>
                    <div class="p-4">
                        <p class="text-xs font-medium text-umkm-sage-dark">{{ $product['seller'] }}</p>
                        <h3 class="mt-1 font-semibold text-umkm-brown">{{ $product['name'] }}</h3>
                        <div class="mt-3 flex items-center justify-between">
                            <span class="text-sm font-bold text-umkm-brown">{{ $product['price'] }}</span>
                            <button type="button" class="rounded-full bg-umkm-sage px-3 py-1.5 text-xs font-semibold text-white transition hover:bg-umkm-sage-dark">+ Keranjang</button>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-12 flex justify-center">
            <a href="#kategori" class="inline-flex rounded-full border-2 border-umkm-brown px-8 py-3.5 text-sm font-semibold text-umkm-brown transition hover:bg-umkm-brown hover:text-white">
                Jelajahi Kategori Lainnya
            </a>
        </div>
    </div>
</section>
