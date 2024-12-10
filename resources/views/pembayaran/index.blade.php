@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Data Pembayaran</h1>
    <a href="{{ route('pembayaran.create') }}" class="btn btn-primary mb-3">Tambah Pembayaran</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Plat Kendaraan</th>
                <th>Nama Pelanggan</th>
                <th>Jumlah Bayar</th>
                <th>Tanggal Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembayarans as $pembayaran)
                <tr>
                    <td>{{ $pembayaran->id }}</td>
                    <td>{{ $pembayaran->daftarService->kendaraan->no_plat }}</td>
                    <td>{{ $pembayaran->daftarService->pelanggan->nama_lengkap }}</td>
                    <td>{{ $pembayaran->jumlah_bayar }}</td>
                    <td>{{ $pembayaran->tanggal_bayar }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
