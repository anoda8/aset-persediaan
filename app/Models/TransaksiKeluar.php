<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiKeluar extends Model
{
    protected $table = 'transaksi_keluars';

    protected $fillable = [
        'id_penerima',
    ];

    public function penerima()
    {
        return $this->belongsTo(PenerimaBarang::class, 'id_penerima', 'id');
    }
}
