<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'daftar_service_id', 
        'keluhan', 
        'estimasi_servis', 
        'nama_mekanik', 
        'sparepart_pengganti'
    ];

    // Relasi dengan daftar service
    public function daftarService()
    {
        return $this->belongsTo(DaftarService::class, 'daftar_service_id');
    }
}
