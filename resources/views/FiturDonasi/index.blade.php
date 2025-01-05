@extends('layouts.app')

@section('title', 'Daftar Donasi')

@section('content')
<div class="container mt-5">
    <h1>Daftar Donasi</h1>

    <!-- Carousel Gambar -->
    <div id="donasiCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/donasi2.jpg') }}" class="d-block w-100" alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/donasi2.jpg') }}" class="d-block w-100" alt="Gambar 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/donasi3.jpg') }}" class="d-block w-100" alt="Gambar 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#donasiCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#donasiCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <a href="{{ route('donasi.create') }}" class="btn btn-primary mb-3">Tambah Donasi</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Donasi</th>
                <th>Nama Donatur</th>
                <th>Kontak</th>
                <th>Detail</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donasis as $donasi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $donasi->tipe_donasi }}</td>
                <td>{{ $donasi->nama_donatur }}</td>
                <td>{{ $donasi->info_kontak }}</td>
                <td>
                    @if($donasi->tipe_donasi == 'Barang')
                        {{ $donasi->nama_barang }}
                    @else
                        Rp{{ number_format($donasi->jumlah, 2) }}
                    @endif
                </td>
                <td>
                    <a href="{{ route('donasi.show', $donasi->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('donasi.edit', $donasi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('donasi.destroy', $donasi->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
