<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliKlinik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_poli'
    ];

    public function dokter()
    {
        return $this->hasMany(Dokter::class);
    }

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
