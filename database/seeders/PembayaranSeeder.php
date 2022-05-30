<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pembayaran;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pembayaran::create([
            'pelanggan_id'=>'1',
            'nama_order' => 'Ach. Dani',
            'tanggal'=>'2022-01-03',
            'bayar'=>'5000'
        ]);
    }
}
