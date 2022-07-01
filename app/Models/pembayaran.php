<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pemesanan;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table ='pembayaran';
    protected $primarykey ='id';
    protected $fillable = ['id','pelanggan_id', 'tanggal', 'bayar'];


    public function pelanggan() 
    {
        return $this->belongsTo(detailpelanggan::class, 'pelanggan_id');
    }
}
