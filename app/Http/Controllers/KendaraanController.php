<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::all(); // Ambil data pelanggan
        return view('kendaraan.create', compact('pelanggans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_plat' => 'required|string',
            'jenis_kendaraan' => 'required|string',
            'no_stnk' => 'required|string',
            'tahun_pembuatan' => 'required|integer',
            'warna' => 'required|string',
            'pelanggan_id' => 'required|exists:pelanggans,id', // Pastikan pelanggan_id ada
        ]);
    
        // Menyimpan data kendaraan
        Kendaraan::create([
            'no_plat' => $request->no_plat,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'no_stnk' => $request->no_stnk,
            'tahun_pembuatan' => $request->tahun_pembuatan,
            'warna' => $request->warna,
            'pelanggan_id' => $request->pelanggan_id, // Menyertakan pelanggan_id
        ]);
    
        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil ditambahkan');
    }
    
}
