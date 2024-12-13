<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kendaraan;
use App\Models\Pelanggan;

class KendaraanSeeder extends Seeder
{
    public function run()
    {
        // Ambil semua pelanggan dari tabel pelanggan
        $pelanggan = Pelanggan::all();

        Kendaraan::insert([
            ['pelanggan_id' => $pelanggan[0]->id, 'no_plat' => 'AB1234CD', 'jenis_kendaraan' => 'Matic', 'no_stnk' => 'STNK001', 'tahun_pembuatan' => 2020, 'warna' => 'Merah'],
            ['pelanggan_id' => $pelanggan[1]->id, 'no_plat' => 'EF5678GH', 'jenis_kendaraan' => 'Manual Transimisi', 'no_stnk' => 'STNK002', 'tahun_pembuatan' => 2019, 'warna' => 'Biru'],
            ['pelanggan_id' => $pelanggan[2]->id, 'no_plat' => 'IJ2345KL', 'jenis_kendaraan' => 'Matic', 'no_stnk' => 'STNK003', 'tahun_pembuatan' => 2021, 'warna' => 'Hijau'],
            ['pelanggan_id' => $pelanggan[3]->id, 'no_plat' => 'MN6789OP', 'jenis_kendaraan' => 'Manual Transimisi', 'no_stnk' => 'STNK004', 'tahun_pembuatan' => 2022, 'warna' => 'Hitam'],
            ['pelanggan_id' => $pelanggan[4]->id, 'no_plat' => 'QR3456ST', 'jenis_kendaraan' => 'Matic', 'no_stnk' => 'STNK005', 'tahun_pembuatan' => 2020, 'warna' => 'Putih'],
            ['pelanggan_id' => $pelanggan[5]->id, 'no_plat' => 'UV1234WX', 'jenis_kendaraan' => 'Manual Transimisi', 'no_stnk' => 'STNK006', 'tahun_pembuatan' => 2021, 'warna' => 'Merah'],
            ['pelanggan_id' => $pelanggan[6]->id, 'no_plat' => 'YZ2345AB', 'jenis_kendaraan' => 'Matic', 'no_stnk' => 'STNK007', 'tahun_pembuatan' => 2022, 'warna' => 'Kuning'],
            ['pelanggan_id' => $pelanggan[7]->id, 'no_plat' => 'CD5678EF', 'jenis_kendaraan' => 'Manual Transimisi', 'no_stnk' => 'STNK008', 'tahun_pembuatan' => 2023, 'warna' => 'Merah'],
            ['pelanggan_id' => $pelanggan[8]->id, 'no_plat' => 'GH7890IJ', 'jenis_kendaraan' => 'Matic', 'no_stnk' => 'STNK009', 'tahun_pembuatan' => 2020, 'warna' => 'Biru'],
            ['pelanggan_id' => $pelanggan[9]->id, 'no_plat' => 'KL1234MN', 'jenis_kendaraan' => 'Manual Transimisi', 'no_stnk' => 'STNK010', 'tahun_pembuatan' => 2021, 'warna' => 'Coklat']
        ]);
    }
}
