@extends('layouts.app')

@section('title', 'Edit Donasi')

@section('header-title', 'Edit Donasi')
@section('header-description', 'Edit informasi donasi ini.')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header">
                    <h5 class="card-title">Edit Donasi</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('donasi.update', $donasi->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="tipe_donasi" class="form-label">Tipe Donasi</label>
                            <select name="tipe_donasi" id="tipe_donasi" class="form-select" required>
                                <option value="Uang" {{ $donasi->tipe_donasi == 'Uang' ? 'selected' : '' }}>Uang</option>
                                <option value="Barang" {{ $donasi->tipe_donasi == 'Barang' ? 'selected' : '' }}>Barang</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nama_donatur" class="form-label">Nama Donatur</label>
                            <input type="text" class="form-control" id="nama_donatur" name="nama_donatur" value="{{ old('nama_donatur', $donasi->nama_donatur) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="info_kontak" class="form-label">Informasi Kontak</label>
                            <input type="text" class="form-control" id="info_kontak" name="info_kontak" value="{{ old('info_kontak', $donasi->info_kontak) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi', $donasi->deskripsi) }}</textarea>
                        </div>

                        <div class="mb-3" id="donasi-amount">
                            <label for="jumlah" class="form-label">Jumlah Donasi (Rp)</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah', $donasi->jumlah) }}" step="0.01">
                        </div>

                        <div class="mb-3" id="donasi-item">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $donasi->nama_barang) }}">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Update Donasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Script untuk menampilkan input yang relevan berdasarkan tipe donasi
    document.getElementById('tipe_donasi').addEventListener('change', function() {
        var tipe = this.value;
        if (tipe === 'Uang') {
            document.getElementById('donasi-amount').style.display = 'block';
            document.getElementById('donasi-item').style.display = 'none';
        } else {
            document.getElementById('donasi-amount').style.display = 'none';
            document.getElementById('donasi-item').style.display = 'block';
        }
    });

    // Set initial state based on current value
    document.getElementById('tipe_donasi').dispatchEvent(new Event('change'));
</script>
@endsection
