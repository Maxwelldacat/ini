<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'nama_client',
        'email',
        'no_hp',
        'jenis_jasa',
        'tanggal_pemesanan',
        'catatan'
    ];
}