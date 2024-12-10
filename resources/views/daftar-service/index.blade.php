@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Daftar Service</h1>
    <a href="{{ route('daftar-service.create') }}" class="btn btn-primary mb-3">Tambah Service</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Plat Kendaraan</th>
                <th>Nama Pelanggan</th>
                <th>Keluhan</th>
                <th>Tanggal Servis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarServices as $daftarService)
                <tr>
                    <td>{{ $daftarService->id }}</td>
                    <td>{{ $daftarService->kendaraan->no_plat }}</td>
                    <td>{{ $daftarService->pelanggan->nama_lengkap }}</td>
                    <td>{{ $daftarService->keluhan }}</td>
                    <td>{{ $daftarService->tanggal_servis }}</td>
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
