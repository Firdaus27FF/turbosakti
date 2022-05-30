<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pemesanan;

class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pemesanan::create([
            'pelanggan_id'=>'1',
            'tanggal'=>'2022-01-03',
            'produk_id'=>'1',
            'jumlah'=>'20',
            'harga'=>'5000',
            'total_harga'=>'100000'
        ]);
    }
}
