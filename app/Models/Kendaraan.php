<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelanggan_id', 
        'no_plat', 
        'jenis_kendaraan', 
        'no_stnk', 
        'tahun_pembuatan', 
        'warna'
    ];

    // Relasi dengan pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }

    // Relasi dengan service
    public function services()
    {
        return $this->hasMany(Service::class, 'kendaraan_id');
    }
}
