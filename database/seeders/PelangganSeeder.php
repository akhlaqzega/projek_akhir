<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    public function run()
    {
        Pelanggan::insert([
            ['nama_lengkap' => 'Ahmad', 'no_hp' => '081234567890', 'alamat' => 'Jalan A', 'pekerjaan' => 'Guru'],
            ['nama_lengkap' => 'Budi', 'no_hp' => '081234567891', 'alamat' => 'Jalan B', 'pekerjaan' => 'Dokter'],
            ['nama_lengkap' => 'Cici', 'no_hp' => '081234567892', 'alamat' => 'Jalan C', 'pekerjaan' => 'Wiraswasta'],
            ['nama_lengkap' => 'Dani', 'no_hp' => '081234567893', 'alamat' => 'Jalan D', 'pekerjaan' => 'Pengusaha'],
            ['nama_lengkap' => 'Eka', 'no_hp' => '081234567894', 'alamat' => 'Jalan E', 'pekerjaan' => 'Programmer'],
            ['nama_lengkap' => 'Fahmi', 'no_hp' => '081234567895', 'alamat' => 'Jalan F', 'pekerjaan' => 'Teknisi'],
            ['nama_lengkap' => 'Gita', 'no_hp' => '081234567896', 'alamat' => 'Jalan G', 'pekerjaan' => 'Penyanyi'],
            ['nama_lengkap' => 'Hana', 'no_hp' => '081234567897', 'alamat' => 'Jalan H', 'pekerjaan' => 'Dokter Gigi'],
            ['nama_lengkap' => 'Iwan', 'no_hp' => '081234567898', 'alamat' => 'Jalan I', 'pekerjaan' => 'Arsitek'],
            ['nama_lengkap' => 'Joko', 'no_hp' => '081234567899', 'alamat' => 'Jalan J', 'pekerjaan' => 'Pengacara']
        ]);
    }
}
