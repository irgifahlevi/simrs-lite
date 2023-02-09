<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'poliklinik_id',
        'pasien_id',
        'kategori',
        'nama_pasien_baru',
        'umur_pasien_baru',
        'jk_pasien_baru',
        'alamat_pasien_baru',
        'telpon_pasien_baru',
        'tanggal_pendaftaran',
        'antrian'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id', 'id');
    }

    public function poliklinik()
    {
        return $this->belongsTo(PoliKlinik::class, 'poliklinik_id', 'id');
    }

    public function statusPoli()
    {
        return $this->hasMany(StatusPoli::class, 'pendaftaran_id', 'id');
    }
}
