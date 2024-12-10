@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Data Service</h1>
    <a href="{{ route('service.create') }}" class="btn btn-primary mb-3">Tambah Service</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Keluhan</th>
                <th>Estimasi Servis</th>
                <th>Nama Mekanik</th>
                <th>Sparepart Pengganti</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->keluhan }}</td>
                    <td>{{ $service->estimasi_servis }}</td>
                    <td>{{ $service->nama_mekanik }}</td>
                    <td>{{ $service->sparepart_pengganti }}</td>
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
