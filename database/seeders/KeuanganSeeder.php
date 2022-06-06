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
            'tanggal'=>'2022-12-20',
            'jumlah_pemasukan'=>'400.000',
            'jumlah_pengeluaran'=>'400.000/bulan'
        ]);
        keuangan::create([
            'tanggal'=>'2022-10-10',
            'jumlah_pemasukan'=>'500.000',
            'jumlah_pengeluaran'=>'500.000/bulan'
        ]);
        keuangan::create([
            'tanggal'=>'2022-04-02',
            'jumlah_pemasukan'=>'200.000',
            'jumlah_pengeluaran'=>'300.000/bulan'
        ]);
    }
}
