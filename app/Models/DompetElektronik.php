<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DompetElektronik extends Model
{
    use HasFactory;

    protected $table = 'dompet_elektronik';

    protected $primaryKey = 'id_dompet_elektronik';

    protected $fillable = [
        'id_pembayaran',
        'id_metode',
        'nama_metode',
        'no_referensi',
        'kode_transaksi',
    ];

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'id_pembayaran');
    }

    public function metodePembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class, 'id_metode');
    }
}
