<?php

namespace App\Http\Controllers;

use App\Models\DaftarService;
use App\Models\Kendaraan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class DaftarServiceController extends Controller
{
    public function index()
    {
        $daftarServices = DaftarService::all();
        return view('daftar-service.index', compact('daftarServices'));
    }

    public function create()
    {
        $kendaraans = Kendaraan::all();
        $pelanggans = Pelanggan::all();
        return view('daftar-service.create', compact('kendaraans', 'pelanggans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kendaraans_id' => 'required|exists:kendaraans,id',  // Pastikan menggunakan 'kendaraans_id'
            'pelanggans_id' => 'required|exists:pelanggans,id',  // Pastikan menggunakan 'pelanggans_id'
            'keluhan' => 'required',
            'tanggal_servis' => 'required|date',
        ]);

        DaftarService::create($request->all());

        return redirect()->route('daftar-service.index')->with('success', 'Daftar Service berhasil ditambahkan');
    }
}
