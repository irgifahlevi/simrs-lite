<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'poliklinik_id',
        'umur',
        'jenis_kelamin',
        'alamat',
        'no_telpon',
        'user_id'

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function poliklinik()
    {
        return $this->belongsTo(PoliKlinik::class, 'poliklinik_id', 'id');
    }


    public function statusPoli()
    {
        return $this->hasOne(StatusPoli::class, 'dokter_id', 'id');
    }
}
