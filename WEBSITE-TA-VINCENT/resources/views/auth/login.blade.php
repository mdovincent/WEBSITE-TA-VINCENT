@extends('layouts.guest')

@section('title', 'Masuk')

@section('content')
    <div class="relative w-full max-w-[440px]">
        {{-- Hiasan mengambang di sekitar kartu --}}
        <span class="auth-animate-float pointer-events-none absolute -left-4 top-8 text-lg text-umkm-gold/50" aria-hidden="true">✦</span>
        <span class="auth-animate-float auth-animate-float-delay pointer-events-none absolute -right-2 top-16 text-sm text-umkm-sage/40" aria-hidden="true">✦</span>
        <svg class="auth-animate-float-slow auth-animate-float-delay-2 pointer-events-none absolute -right-6 bottom-32 h-8 w-8 text-umkm-sage/25" viewBox="0 0 40 40" fill="currentColor" aria-hidden="true">
            <path d="M20 6c-5 6-8 12-8 18a8 8 0 1 0 16 0c0-6-3-12-8-18z"/>
        </svg>

        <div class="relative overflow-hidden rounded-[2rem] border border-umkm-sand/60 bg-white/95 p-[1px] shadow-2xl shadow-umkm-forest/10 backdrop-blur-sm">
            {{-- Border gradien halus --}}
            <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-br from-umkm-sage/30 via-umkm-sand/20 to-umkm-gold/30 opacity-80"></div>

            <div class="relative rounded-[calc(2rem-1px)] bg-white px-8 py-10 sm:px-10 sm:py-11">
                <div class="auth-card-glow pointer-events-none absolute inset-x-0 top-0 h-32"></div>
                <div class="auth-shimmer pointer-events-none absolute inset-0 opacity-60"></div>

                {{-- Sudut dekoratif --}}
                <svg class="pointer-events-none absolute left-4 top-4 h-8 w-8 text-umkm-sage/20" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true">
                    <path d="M4 4v12M4 4h12" stroke-linecap="round"/>
                </svg>
                <svg class="pointer-events-none absolute right-4 top-4 h-8 w-8 rotate-90 text-umkm-sage/20" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true">
                    <path d="M4 4v12M4 4h12" stroke-linecap="round"/>
                </svg>

                {{-- Ikon dekoratif atas --}}
                <div class="relative mx-auto mb-7 flex h-24 w-24 items-center justify-center">
                    <span class="auth-animate-pulse absolute inset-0 rounded-full bg-umkm-sage/10 ring-1 ring-umkm-sage/15"></span>
                    <span class="auth-animate-spin absolute inset-1 rounded-full border border-dashed border-umkm-gold/30"></span>
                    <span class="absolute -left-2 top-3 text-base text-umkm-gold/80" aria-hidden="true">✦</span>
                    <span class="absolute right-0 top-1 text-xs text-umkm-gold/60" aria-hidden="true">✦</span>
                    <span class="absolute bottom-2 left-1 text-[10px] text-umkm-sage/50" aria-hidden="true">✦</span>
                    <span class="absolute -right-1 bottom-4 text-[9px] text-umkm-gold/40" aria-hidden="true">✦</span>
                    <span class="relative flex h-[4.5rem] w-[4.5rem] items-center justify-center rounded-full bg-gradient-to-br from-umkm-sage/20 to-umkm-sage/5 shadow-inner ring-1 ring-umkm-sage/25">
                        <svg class="h-9 w-9 text-umkm-forest" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <path d="M12 3c-4 4-6 8-6 12a6 6 0 1 0 12 0c0-4-2-8-6-12Z" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 11v10" stroke-linecap="round"/>
                        </svg>
                    </span>
                </div>

                <div class="relative text-center">
                    <p class="mb-2 inline-flex items-center gap-2 rounded-full border border-umkm-sand/80 bg-umkm-cream/80 px-3 py-1 text-[11px] font-semibold uppercase tracking-widest text-umkm-sage-dark">
                        <span class="h-1 w-1 rounded-full bg-umkm-sage"></span>
                        Selamat datang
                        <span class="h-1 w-1 rounded-full bg-umkm-sage"></span>
                    </p>
                    <h1 class="font-serif text-[1.7rem] font-bold leading-tight text-umkm-brown sm:text-[2rem]">
                        Masuk ke akun Anda
                    </h1>
                    <p class="mx-auto mt-2 max-w-xs text-sm leading-relaxed text-umkm-muted">
                        Selamat datang kembali di UMKM Bersama Maju.
                    </p>
                </div>

                <div class="relative my-7 flex items-center gap-3">
                    <span class="h-px flex-1 bg-gradient-to-r from-transparent via-umkm-sand to-umkm-sage/40"></span>
                    <span class="text-umkm-gold/70" aria-hidden="true">❧</span>
                    <span class="h-px flex-1 bg-gradient-to-l from-transparent via-umkm-sand to-umkm-sage/40"></span>
                </div>

                <form method="POST" action="{{ route('login') }}" class="relative space-y-5">
                    @csrf

                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold text-umkm-brown">Email</label>
                        <div class="group relative">
                            <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-umkm-muted transition group-focus-within:text-umkm-sage">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
                                </svg>
                            </span>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="Masukkan email Anda"
                                class="w-full rounded-2xl border border-umkm-sand/90 bg-[#faf8f4] py-3.5 pl-12 pr-4 text-sm text-umkm-brown shadow-sm shadow-umkm-brown/5 placeholder:text-umkm-muted/60 outline-none transition focus:border-umkm-sage focus:bg-white focus:shadow-md focus:shadow-umkm-sage/10 focus:ring-2 focus:ring-umkm-sage/15"
                            >
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                    </div>

                    <div>
                        <label for="password" class="mb-2 block text-sm font-semibold text-umkm-brown">Kata sandi</label>
                        <div class="group relative">
                            <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-umkm-muted transition group-focus-within:text-umkm-sage">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/>
                                </svg>
                            </span>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Masukkan kata sandi"
                                class="w-full rounded-2xl border border-umkm-sand/90 bg-[#faf8f4] py-3.5 pl-12 pr-12 text-sm text-umkm-brown shadow-sm shadow-umkm-brown/5 placeholder:text-umkm-muted/60 outline-none transition focus:border-umkm-sage focus:bg-white focus:shadow-md focus:shadow-umkm-sage/10 focus:ring-2 focus:ring-umkm-sage/15"
                            >
                            <button
                                type="button"
                                id="toggle-password"
                                class="absolute right-3 top-1/2 -translate-y-1/2 rounded-xl p-1.5 text-umkm-muted transition hover:bg-umkm-sand/70 hover:text-umkm-forest"
                                aria-label="Tampilkan kata sandi"
                            >
                                <svg id="icon-eye" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                </svg>
                                <svg id="icon-eye-off" class="hidden h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12c1.292 4.338 5.31 7.5 10.066 7.5.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88"/>
                                </svg>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
                    </div>

                    <label class="flex cursor-pointer items-center gap-2.5 rounded-xl border border-transparent px-1 py-1 text-sm text-umkm-muted transition hover:border-umkm-sand/60 hover:bg-umkm-cream/50">
                        <input
                            type="checkbox"
                            name="remember"
                            class="h-4 w-4 rounded border-umkm-sand text-umkm-forest focus:ring-umkm-sage/30"
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        Ingat saya
                    </label>

                    <button
                        type="submit"
                        class="group relative flex w-full items-center justify-center gap-2 overflow-hidden rounded-2xl bg-gradient-to-r from-umkm-forest to-umkm-forest-dark py-3.5 text-sm font-semibold text-white shadow-lg shadow-umkm-forest/30 transition hover:shadow-xl hover:shadow-umkm-forest/40 active:scale-[0.99]"
                    >
                        <span class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/10 to-white/0 opacity-0 transition group-hover:opacity-100"></span>
                        <svg class="relative h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                            <path d="M12 3c-4 4-6 8-6 12a6 6 0 1 0 12 0c0-4-2-8-6-12Z" stroke-linecap="round"/>
                        </svg>
                        <span class="relative">Masuk</span>
                    </button>
                </form>

                <p class="relative mt-8 text-center text-sm text-umkm-muted">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="font-semibold text-umkm-sage-dark underline-offset-2 transition hover:text-umkm-forest hover:underline">Daftar sekarang</a>
                </p>
            </div>
        </div>

        <div class="mx-auto mt-7 flex flex-wrap items-center justify-center gap-3">
            <p class="flex items-center gap-2 rounded-full border border-umkm-sand/70 bg-white/80 px-4 py-2 text-xs font-medium text-umkm-muted shadow-md backdrop-blur-md">
                <svg class="h-4 w-4 text-umkm-sage" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>
                </svg>
                Aman &amp; terpercaya
            </p>
            <p class="flex items-center gap-2 rounded-full border border-umkm-sand/70 bg-white/80 px-4 py-2 text-xs font-medium text-umkm-muted shadow-md backdrop-blur-md">
                <span class="text-umkm-gold" aria-hidden="true">✦</span>
                Dukung UMKM lokal
            </p>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.getElementById('toggle-password')?.addEventListener('click', function () {
        const input = document.getElementById('password');
        const eye = document.getElementById('icon-eye');
        const eyeOff = document.getElementById('icon-eye-off');
        const isHidden = input.type === 'password';
        input.type = isHidden ? 'text' : 'password';
        eye.classList.toggle('hidden', isHidden);
        eyeOff.classList.toggle('hidden', !isHidden);
        this.setAttribute('aria-label', isHidden ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
    });
</script>
@endpush
