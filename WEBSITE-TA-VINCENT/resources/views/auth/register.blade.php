@extends('layouts.guest')

@section('title', 'Daftar')

@section('content')
    <div class="rounded-3xl border border-umkm-sand bg-white p-8 shadow-sm">
        <h1 class="text-2xl font-bold text-umkm-brown">Buat akun baru</h1>
        <p class="mt-2 text-sm text-umkm-muted">Bergabung dan dukung produk UMKM Indonesia.</p>

        <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-sm font-semibold text-umkm-brown">Nama lengkap</label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="name"
                    class="mt-2 w-full rounded-xl border border-umkm-sand bg-umkm-cream/50 px-4 py-3 text-sm outline-none transition focus:border-umkm-sage focus:ring-2 focus:ring-umkm-sage/20"
                >
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold text-umkm-brown">Email</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="username"
                    class="mt-2 w-full rounded-xl border border-umkm-sand bg-umkm-cream/50 px-4 py-3 text-sm outline-none transition focus:border-umkm-sage focus:ring-2 focus:ring-umkm-sage/20"
                >
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-umkm-brown">Kata sandi</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    class="mt-2 w-full rounded-xl border border-umkm-sand bg-umkm-cream/50 px-4 py-3 text-sm outline-none transition focus:border-umkm-sage focus:ring-2 focus:ring-umkm-sage/20"
                >
                <p class="mt-1 text-xs text-umkm-muted">Minimal 8 karakter.</p>
                <x-input-error :messages="$errors->get('password')" />
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-semibold text-umkm-brown">Konfirmasi kata sandi</label>
                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    class="mt-2 w-full rounded-xl border border-umkm-sand bg-umkm-cream/50 px-4 py-3 text-sm outline-none transition focus:border-umkm-sage focus:ring-2 focus:ring-umkm-sage/20"
                >
            </div>

            <button type="submit" class="w-full rounded-full bg-umkm-sage py-3 text-sm font-semibold text-white transition hover:bg-umkm-sage-dark">
                Daftar
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-umkm-muted">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="font-semibold text-umkm-sage-dark hover:underline">Masuk di sini</a>
        </p>
    </div>
@endsection
