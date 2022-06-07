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
            'jumlah_pemasukan'=>'4000000/minggu',
            'jumlah_pengeluaran'=>'400000'
        ]);
        keuangan::create([
            'tanggal'=>'2022-10-10',
            'jumlah_pemasukan'=>'40000000/bulan',
            'jumlah_pengeluaran'=>'500000'
        ]);
        keuangan::create([
            'tanggal'=>'2022-04-02',
            'jumlah_pemasukan'=>'8000000/minggu',
            'jumlah_pengeluaran'=>'300000'
        ]);
    }
}
