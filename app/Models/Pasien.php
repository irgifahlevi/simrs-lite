<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'umur',
        'jenis_kelamin',
        'no_telpon'
    ];


    public function pendaftaran()
    {
        return $this->hasOne(Pendaftaran::class, 'pasien_id', 'id');
    }
}
