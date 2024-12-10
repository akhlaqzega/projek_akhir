<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\DaftarService;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::all();
        return view('pembayaran.index', compact('pembayarans'));
    }

    public function create()
    {
        $daftarServices = DaftarService::all();
        return view('pembayaran.create', compact('daftarServices'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'daftar_service_id' => 'required|exists:daftar_service_id',
            'jumlah_bayar' => 'required|numeric',
            'tanggal_bayar' => 'required|date',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil ditambahkan');
    }
}
