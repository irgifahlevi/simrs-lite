<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPoli extends Model
{
    use HasFactory;

    protected $fillable = [
        'pendaftaran_id',
        'dokter_id',
        'tanggal',
        'diagnosa',
        'status_poli'
    ];


    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'pendaftaran_id', 'id');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
