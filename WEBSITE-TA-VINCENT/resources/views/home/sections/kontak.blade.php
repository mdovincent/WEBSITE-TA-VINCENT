<section class="scroll-mt-24 border-t border-umkm-sand/80 bg-umkm-cream py-16 sm:py-20" id="kontak">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <p class="inline-block rounded-full bg-white px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-umkm-muted ring-1 ring-umkm-sand/80">Hubungi Kami</p>
            <h2 class="mx-auto mt-4 max-w-3xl text-2xl font-bold text-umkm-brown sm:text-3xl">Kontak &amp; Bantuan</h2>
            <p class="mx-auto mt-3 max-w-2xl text-sm text-umkm-muted sm:text-base">Ada pertanyaan atau ingin bergabung sebagai mitra UMKM? Tim kami siap membantu.</p>
        </div>

        <div class="mt-12 grid gap-10 lg:grid-cols-2">
            <div class="space-y-6">
                <div class="flex gap-4 rounded-2xl bg-white p-5 shadow-sm ring-1 ring-umkm-sand/60">
                    <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-umkm-sage/15 text-umkm-sage">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                    </span>
                    <div>
                        <h3 class="font-semibold text-umkm-brown">Email</h3>
                        <a href="mailto:kontak@umkmbersamamaju.test" class="mt-1 text-sm text-umkm-muted hover:text-umkm-sage-dark">kontak@umkmbersamamaju.test</a>
                    </div>
                </div>
                <div class="flex gap-4 rounded-2xl bg-white p-5 shadow-sm ring-1 ring-umkm-sand/60">
                    <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-umkm-sage/15 text-umkm-sage">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                    </span>
                    <div>
                        <h3 class="font-semibold text-umkm-brown">Telepon</h3>
                        <p class="mt-1 text-sm text-umkm-muted">+62 812-3456-7890 (Senin–Jumat, 09.00–17.00 WIB)</p>
                    </div>
                </div>
                <div class="flex gap-4 rounded-2xl bg-white p-5 shadow-sm ring-1 ring-umkm-sand/60">
                    <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-umkm-sage/15 text-umkm-sage">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                    </span>
                    <div>
                        <h3 class="font-semibold text-umkm-brown">Alamat</h3>
                        <p class="mt-1 text-sm text-umkm-muted">Jl. Ekonomi Kreatif No. 88, Jakarta Selatan 12345, Indonesia</p>
                    </div>
                </div>
            </div>

            <form action="#" method="post" class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-umkm-sand/60 sm:p-8">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-umkm-brown">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required class="mt-1 w-full rounded-xl border border-umkm-sand bg-umkm-cream/30 px-4 py-2.5 text-sm outline-none ring-umkm-sage focus:border-umkm-sage focus:ring-2" placeholder="Nama Anda">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-umkm-brown">Email</label>
                        <input type="email" id="email" name="email" required class="mt-1 w-full rounded-xl border border-umkm-sand bg-umkm-cream/30 px-4 py-2.5 text-sm outline-none ring-umkm-sage focus:border-umkm-sage focus:ring-2" placeholder="email@contoh.com">
                    </div>
                    <div>
                        <label for="pesan" class="block text-sm font-medium text-umkm-brown">Pesan</label>
                        <textarea id="pesan" name="pesan" rows="4" required class="mt-1 w-full rounded-xl border border-umkm-sand bg-umkm-cream/30 px-4 py-2.5 text-sm outline-none ring-umkm-sage focus:border-umkm-sage focus:ring-2" placeholder="Tulis pesan Anda..."></textarea>
                    </div>
                </div>
                <button type="submit" class="mt-6 w-full rounded-full bg-umkm-sage py-3 text-sm font-semibold text-white transition hover:bg-umkm-sage-dark">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</section>
