@extends('layouts.site', ['active' => 'beranda'])

@section('title', 'UMKM Bersama Maju — Belanja Produk Lokal Berkualitas')
@section('meta_description', 'Temukan produk UMKM pilihan dari seluruh Indonesia. Dukung ekonomi lokal dengan belanja aman dan terpercaya.')

@section('content')
    @include('home.sections.hero')
    @include('home.sections.tentang')
    @include('home.sections.produk')
    @include('home.sections.kategori')
    @include('home.sections.berita')
    @include('home.sections.kontak')
@endsection

@section('footer')
    <x-site-footer class="relative z-10" />
@endsection
