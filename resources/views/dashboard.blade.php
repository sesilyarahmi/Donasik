@extends('layouts.app')

@section('title', 'Beranda Donasik')

@section('header-title', 'Bantu Mereka yang Membutuhkan')
@section('header-description', 'Gabung bersama kami dalam platform donasi terbaik.')

@section('content')
<div class="container mt-5">
    <div class="row g-4">
        <!-- Donasi Barang Section -->
        <div class="col-md-4">
            <div class="card shadow-lg border-light rounded-3">
                <div class="card-body text-center">
                    <h5 class="card-title text-primary">Donasi Barang</h5>
                    <p class="card-text text-muted">Kirimkan barang bekas yang layak pakai untuk mereka yang membutuhkan.</p>
                    <a href="{{ url('/donate') }}" class="btn btn-primary w-100">Donasi Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Galang Dana Section -->
        <div class="col-md-4">
            <div class="card shadow-lg border-light rounded-3">
                <div class="card-body text-center">
                    <h5 class="card-title text-success">Galang Dana</h5>
                    <p class="card-text text-muted">Mulai kampanye penggalangan dana untuk tujuan mulia Anda.</p>
                    <a href="{{ url('/campaigns') }}" class="btn btn-success w-100">Mulai Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Zakat & Donasi Uang Section -->
        <div class="col-md-4">
            <div class="card shadow-lg border-light rounded-3">
                <div class="card-body text-center">
                    <h5 class="card-title text-warning">Zakat & Donasi Uang</h5>
                    <p class="card-text text-muted">Sumbangkan uang Anda untuk zakat atau kebutuhan lainnya.</p>
                    <a href="{{ url('/zakat') }}" class="btn btn-warning w-100">Donasi Uang</a>
                </div>
            </div>
        </div>

        <!-- Daftar Volunteer Section -->
        <div class="col-md-6">
            <div class="card shadow-lg border-light rounded-3">
                <div class="card-body text-center">
                    <h5 class="card-title text-info">Daftar Volunteer</h5>
                    <p class="card-text text-muted">Bergabunglah sebagai volunteer untuk membantu mereka yang membutuhkan.</p>
                    <a href="{{ url('/volunteer') }}" class="btn btn-info w-100">Daftar Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Artikel Section -->
        <div class="col-md-6">
            <div class="card shadow-lg border-light rounded-3">
                <div class="card-body text-center">
                    <h5 class="card-title text-danger">Artikel Terbaru</h5>
                    <p class="card-text text-muted">Baca artikel terbaru untuk mengetahui lebih banyak tentang donasi dan kemanusiaan.</p>
                    <a href="{{ url('/articles') }}" class="btn btn-danger w-100">Lihat Artikel</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
