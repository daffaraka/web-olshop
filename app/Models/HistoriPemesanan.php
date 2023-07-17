<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriPemesanan extends Model
{
    use HasFactory;

    protected $table = 'histori_pemesanan';

    protected $primaryKey = 'id_histori_pemesanan';

    protected $fillable = [
        'id_pemesanan',
        'id_barang',
        'jumlah_barang',
        'total_barang',
    ];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
