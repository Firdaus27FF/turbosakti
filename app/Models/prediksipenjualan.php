<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prediksipenjualan extends Model
{
    use HasFactory;

    protected $table ='prediksi_penjualan';
    protected $primarykey ='id';
    protected $fillable = ['id', 'jadwal', 'hasil_jumlah_produk', 'hasil_bersih'];
}
