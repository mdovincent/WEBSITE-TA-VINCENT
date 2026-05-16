<section class="scroll-mt-24 bg-white pb-20 pt-4 sm:pb-24" id="kategori">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="inline-block rounded-full bg-umkm-cream px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-umkm-muted">Kategori Populer</p>
            <h2 class="mx-auto mt-4 max-w-3xl text-2xl font-bold text-umkm-brown sm:text-3xl">
                Temukan Produk UMKM Sesuai Kebutuhan Anda
            </h2>
        </div>

        <div class="mt-12 grid grid-cols-2 gap-4 sm:gap-6 md:grid-cols-4">
            @php
                $categories = [
                    ['label' => 'Kerajinan Tangan', 'img' => 'https://images.unsplash.com/photo-1610701596007-11502817dcfe?auto=format&fit=crop&w=500&q=80'],
                    ['label' => 'Makanan & Minuman', 'img' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=500&q=80'],
                    ['label' => 'Camilan & Keripik', 'img' => 'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=500&q=80'],
                    ['label' => 'Madu & Herbal', 'img' => 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=500&q=80'],
                    ['label' => 'Kopi & Teh', 'img' => 'https://images.unsplash.com/photo-1497935586351-b67a49e012bf?auto=format&fit=crop&w=500&q=80'],
                    ['label' => 'Gerabah & Keramik', 'img' => 'https://images.unsplash.com/photo-1610701596100-87b74d1c7ea5?auto=format&fit=crop&w=500&q=80'],
                    ['label' => 'Tekstil & Batik', 'img' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=500&q=80'],
                    ['label' => 'Oleh-oleh Khas', 'img' => 'https://images.unsplash.com/photo-1606787366850-de633012004b?auto=format&fit=crop&w=500&q=80'],
                ];
            @endphp
            @foreach ($categories as $cat)
                <a href="#produk" class="group block text-center">
                    <div class="overflow-hidden rounded-3xl bg-umkm-sand/50 shadow-sm ring-1 ring-umkm-sand transition group-hover:ring-umkm-sage/40">
                        <img src="{{ $cat['img'] }}" alt="{{ $cat['label'] }}" class="aspect-[4/3] w-full object-cover transition duration-300 group-hover:scale-105" width="500" height="375" loading="lazy">
                    </div>
                    <p class="mt-3 text-sm font-semibold text-umkm-brown sm:text-base">{{ $cat['label'] }}</p>
                </a>
            @endforeach
        </div>

        <div class="mt-12 flex justify-center">
            <a href="#produk" class="inline-flex rounded-full bg-umkm-sage px-8 py-3.5 text-sm font-semibold text-white shadow-sm transition hover:bg-umkm-sage-dark">
                Lihat Semua Kategori
            </a>
        </div>
    </div>
</section>
