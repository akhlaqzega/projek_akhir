@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Tambah Pembayaran</h1>

    <form action="{{ route('pembayaran.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="daftar_service_id" class="form-label">Daftar Service</label>
            <select name="daftar_service_id" id="daftar_service_id" class="form-control">
                @foreach ($daftarServices as $daftarService)
                    <option value="{{ $daftarService->id }}">{{ $daftarService->kendaraan->no_plat }} - {{ $daftarService->pelanggan->nama_lengkap }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
            <input type="number" name="jumlah_bayar" id="jumlah_bayar" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_bayar" class="form-label">Tanggal Bayar</label>
            <input type="date" name="tanggal_bayar" id="tanggal_bayar" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
