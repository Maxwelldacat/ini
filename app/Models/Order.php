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
        'paket',
        'tanggal_pemesanan',
        'catatan',
        'drone',
        'fast_edit',
        'total_harga',
        'bukti_transfer',
        'status'
    ];
}


