@extends('layouts.app')

@section('title', $donasi ?? 'Tambah Donasi')

@section('content')
<div class="container mt-5">
    <h1>{{ isset($donasi) ? 'Edit Donasi' : 'Tambah Donasi' }}</h1>
    <form action="{{ isset($donasi) ? route('donasi.update', $donasi->id) : route('donasi.store') }}" method="POST">
        @csrf
        @if(isset($donasi))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="tipe_donsi" class="form-label">Jenis Donasi</label>
            <select name="tipe_donasi" class="form-select" required>
                <option value="Uang" {{ isset($donasi) && $donasi->tipe_donasi == 'Uang' ? 'selected' : '' }}>Uang</option>
                <option value="Barang" {{ isset($donasi) && $donasi->tipe_donasi == 'Barang' ? 'selected' : '' }}>Barang</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nama_donatur" class="form-label">Nama Donatur</label>
            <input type="text" name="nama_donatur" class="form-control" value="{{ $donasi->nama_donatur ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label for="info_kontak" class="form-label">Kontak</label>
            <input type="text" name="info_kontak" class="form-control" value="{{ $donasi->info_kontak ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $donasi->deskripsi ?? '' }}</textarea>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah (untuk donasi uang)</label>
            <input type="number" name="jumlah" class="form-control" value="{{ $donasi->jumlah ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang (untuk donasi barang)</label>
            <input type="text" name="nama_barang" class="form-control" value="{{ $donasi->nama_barang ?? '' }}">
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($donasi) ? 'Simpan' : 'Tambah' }}</button>
    </form>
</div>
@endsection
