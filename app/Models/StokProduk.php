<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokProduk extends Model
{
    use HasFactory;

    protected $table ='stock_produks';
    protected $primarykey ='id';
    protected $fillable = ['id', 'jumlah', 'tanggal_produksi', 'harga_per_ball'];
}
