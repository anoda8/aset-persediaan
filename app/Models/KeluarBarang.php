<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeluarBarang extends Model
{
    protected $table = 'keluar_barangs';

    protected $fillable = [
        'kode_barang',
        'nama_penerima',
        'id_penerima',
        'jumlah_keluar',
        'keperluan',
        'tanggal_keluar',
        'author',
    ];
}
