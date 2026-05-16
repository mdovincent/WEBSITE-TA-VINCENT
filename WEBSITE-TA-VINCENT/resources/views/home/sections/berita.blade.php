<section class="scroll-mt-24 border-t border-umkm-sand/80 bg-white py-16 sm:py-20" id="berita">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="inline-block rounded-full bg-umkm-cream px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-umkm-muted">Berita &amp; Artikel</p>
            <h2 class="mx-auto mt-4 max-w-3xl text-2xl font-bold text-umkm-brown sm:text-3xl">Kabar Terbaru dari Dunia UMKM</h2>
            <p class="mx-auto mt-3 max-w-2xl text-sm text-umkm-muted sm:text-base">Tips, inspirasi, dan update program pendampingan untuk pelaku usaha kecil.</p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-3">
            @php
                $articles = [
                    ['title' => '5 Tips Sukses Jualan Online untuk UMKM Pemula', 'date' => '12 Mei 2026', 'excerpt' => 'Pelajari strategi pemasaran digital yang efektif tanpa budget besar.', 'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80'],
                    ['title' => 'Program Pendampingan Digital UMKM 2026 Dibuka', 'date' => '5 Mei 2026', 'excerpt' => 'Daftarkan usaha Anda dan dapatkan akses pelatihan gratis selama 3 bulan.', 'img' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=600&q=80'],
                    ['title' => 'Kisah Inspiratif: Dari Dapur Rumah ke Seluruh Indonesia', 'date' => '28 Apr 2026', 'excerpt' => 'Bagaimana Ibu Sari mengembangkan bisnis keripik hingga ribuan pesanan per bulan.', 'img' => 'https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&w=600&q=80'],
                ];
            @endphp
            @foreach ($articles as $article)
                <article class="overflow-hidden rounded-2xl bg-umkm-cream/50 shadow-sm ring-1 ring-umkm-sand/60 transition hover:shadow-md">
                    <img src="{{ $article['img'] }}" alt="{{ $article['title'] }}" class="aspect-[16/10] w-full object-cover" width="600" height="375" loading="lazy">
                    <div class="p-6">
                        <time class="text-xs font-medium text-umkm-sage-dark">{{ $article['date'] }}</time>
                        <h3 class="mt-2 text-lg font-bold text-umkm-brown">{{ $article['title'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-umkm-muted">{{ $article['excerpt'] }}</p>
                        <a href="#" class="mt-4 inline-flex text-sm font-semibold text-umkm-sage-dark hover:text-umkm-forest">Baca selengkapnya →</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
