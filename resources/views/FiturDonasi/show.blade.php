@extends('layouts.app')

@section('title', 'Detail Donasi')

@section('header-title', 'Detail Donasi')
@section('header-description', 'Lihat detail informasi donasi ini.')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header">
                    <h5 class="card-title">Detail Donasi</h5>
                </div>
                <div class="card-body">
                    <p><strong>Nama Donatur:</strong> {{ $donasi->nama_donatur }}</p>
                    <p><strong>Informasi Kontak:</strong> {{ $donasi->info_kontak }}</p>
                    <p><strong>Deskripsi:</strong> {{ $donasi->deskripsi }}</p>
                    <p><strong>Tipe Donasi:</strong> {{ $donasi->tipe_donasi }}</p>

                    @if($donasi->tipe_donasi == 'Uang')
                        <p><strong>Jumlah Donasi:</strong> Rp {{ number_format($donasi->jumlah, 2, ',', '.') }}</p>
                    @else
                        <p><strong>Nama Barang:</strong> {{ $donasi->nama_barang }}</p>
                    @endif

                    <a href="{{ route('donasi.edit', $donasi->id) }}" class="btn btn-warning mt-3">Edit Donasi</a>
                    <a href="{{ route('donasi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
