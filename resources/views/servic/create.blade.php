@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Tambah Service</h1>

    <form action="{{ route('service.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_service" class="form-label">Nama Service</label>
            <input type="text" name="nama_service" id="nama_service" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="harga_service" class="form-label">Harga Service</label>
            <input type="number" name="harga_service" id="harga_service" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
