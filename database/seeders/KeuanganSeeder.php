<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keuangan;

class KeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        keuangan::create([
            'tanggal'=>'2022-01-03',
            'jumlah_pemasukan'=>'500',
            'jumlah_pengeluaran'=>'50.000/bulan'
        ]);
    }
}
