<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenerimaBarang extends Model
{
    protected $table = 'penerima_barangs';

    protected $fillable = [
        'nama_penerima',
        'nip',
    ];
}
