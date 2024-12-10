@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Data Kendaraan</h1>
    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3">Tambah Kendaraan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Plat</th>
                <th>Jenis Kendaraan</th>
                <th>No STNK</th>
                <th>Tahun Pembuatan</th>
                <th>Warna</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kendaraans as $kendaraan)
                <tr>
                    <td>{{ $kendaraan->id }}</td>
                    <td>{{ $kendaraan->no_plat }}</td>
                    <td>{{ $kendaraan->jenis_kendaraan }}</td>
                    <td>{{ $kendaraan->no_stnk }}</td>
                    <td>{{ $kendaraan->tahun_pembuatan }}</td>
                    <td>{{ $kendaraan->warna }}</td>
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
