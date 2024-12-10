<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarService extends Model
{
    use HasFactory;

    protected $fillable = [
        'kendaraans_id',  // Gantilah 'kendaraan_id' menjadi 'kendaraans_id'
        'pelanggans_id',  // Gantilah 'pelanggan_id' menjadi 'pelanggans_id'
        'keluhan',
        'tanggal_servis',
    ];

    // Relasi dengan kendaraan
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraans_id');  // Gantilah 'kendaraan_id' menjadi 'kendaraans_id'
    }

    // Relasi dengan pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggans_id');  // Gantilah 'pelanggan_id' menjadi 'pelanggans_id'
    }
}
