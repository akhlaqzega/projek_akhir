@extends('layouts.main')

@section('content')
    <h1 class="text-center">Selamat Datang di Sistem Service Motor</h1>
    <p class="text-center">Kelola data pelanggan, kendaraan, service, dan pembayaran dengan mudah dan efisien.</p>
    <div class="text-center">
        <a href="{{ route('pelanggan.index') }}" class="btn btn-primary">Mulai Kelola Data</a>
    </div>
@endsection
