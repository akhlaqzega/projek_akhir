@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Tambah Daftar Service</h1>

    <form action="{{ route('daftar-service.store') }}" method="POST"> <!-- Ubah route ke daftar_service.store -->
        @csrf
        <div class="mb-3">
            <label for="kendaraans_id" class="form-label">Kendaraan</label>
            <select name="kendaraans_id" id="kendaraans_id" class="form-control">
                @foreach ($kendaraans as $kendaraan)
                    <option value="{{ $kendaraan->id }}">{{ $kendaraan->no_plat }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="pelanggans_id" class="form-label">Pelanggan</label>
            <select name="pelanggans_id" id="pelanggans_id" class="form-control">
                @foreach ($pelanggans as $pelanggan)
                    <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama_lengkap }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan</label>
            <textarea name="keluhan" id="keluhan" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal_servis" class="form-label">Tanggal Servis</label>
            <input type="date" name="tanggal_servis" id="tanggal_servis" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
