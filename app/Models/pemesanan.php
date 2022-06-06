<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table ='pemesanans';
    protected $primarykey ='id';
    protected $fillable = ['id', 'pelanggan_id', 'nama_order', 'tanggal', 'nama_produk', 'produk_id', 'jumlah', 'harga','total_harga'];

    public function pelanggan()
    {
        return $this->belongsTo(datapelanggan::class, 'pelanggan_id');
    }

    public function produk()
    {
        return $this->belongsTo(jenisproduk::class, 'produk_id');
    }
}
