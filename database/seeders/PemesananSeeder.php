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
            'jumlah'=>'2 ball',
            'harga'=>'5000',
            'total_harga'=>'1000000'
        ]);
        pemesanan::create([
            'pelanggan_id'=>'1',
            'tanggal'=>'2022-02-10',
            'produk_id'=>'1',
            'jumlah'=>'3 ball',
            'harga'=>'5000',
            'total_harga'=> '150000'
        ]);
    }
}
