@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Tambah Kendaraan</h1>

    <form action="{{ route('kendaraan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="pelanggan_id" class="form-label">Pelanggan</label>
            <select name="pelanggan_id" id="pelanggan_id" class="form-control" required>
                @foreach ($pelanggans as $pelanggan)
                    <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama_lengkap }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="no_plat" class="form-label">No Plat</label>
            <input type="text" name="no_plat" id="no_plat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
            <select name="jenis_kendaraan" id="jenis_kendaraan" class="form-control" required>
                <option value="Matic">Matic</option>
                <option value="Manual">Manual</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="no_stnk" class="form-label">No STNK</label>
            <input type="text" name="no_stnk" id="no_stnk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tahun_pembuatan" class="form-label">Tahun Pembuatan</label>
            <input type="number" name="tahun_pembuatan" id="tahun_pembuatan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="warna" class="form-label">Warna</label>
            <input type="text" name="warna" id="warna" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    
</div>
@endsection
