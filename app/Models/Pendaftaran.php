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
        'tanggal_pendaftaran',
        'kategori',
        'antrian',
        'diagnosa',
        'status_poli',
        'dokter_id',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function poliklinik()
    {
        return $this->belongsTo(PoliKlinik::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
