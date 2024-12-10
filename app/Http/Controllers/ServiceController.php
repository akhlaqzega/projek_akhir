<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('servic.index', compact('services'));
    }

    public function create()
    {
        return view('servic.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_service' => 'required|unique:services,nama_service',
            'harga_service' => 'required|numeric',
            'deskripsi' => 'nullable|string',
        ]);

        Service::create($request->all());

        return redirect()->route('service.index')->with('success', 'Service berhasil ditambahkan');
    }
}
