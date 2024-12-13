<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarService extends Model
{
    use HasFactory;
    protected $fillable = [
        'kendaraans_id',  
        'pelanggans_id',   
        'keluhan',         
        'tanggal_servis',  
    ];
    // Relasi ke kendaraan
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraans_id');
    }

    // Relasi dengan Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggans_id');
    }
    public function pembayaran()
{
    return $this->hasMany(Pembayaran::class, 'services_id');
}
}
