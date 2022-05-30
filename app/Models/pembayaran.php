<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pelanggan;

class pembayaran extends Model
{
    use HasFactory;

    protected $table ='pembayaran';
    protected $primarykey ='id';
    protected $fillable = ['id', 'nama_order','pelanggan_id', 'tanggal', 'bayar'];


    public function pelanggan() 
    {
        return $this->belongsTo(datapelanggan::class, 'pelanggan_id');
    }
}
