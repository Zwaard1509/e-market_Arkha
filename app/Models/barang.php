<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $fillable = ['nama_barang','kode_barang','produk_id','satuan','harga_jual','stock','ditarik','user_id' ];
}
