<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'jumlah_biaya',
        'jenis_pembayaran',
        'keterangan'
    ];

    // Relasi dengan service
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
