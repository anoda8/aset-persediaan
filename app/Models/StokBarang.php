<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StokBarang extends Model
{
    protected $table = 'stok_barangs';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'satuan',
        'jumlah_stok',
    ];
}
