<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use App\Models\Pendaftaran;
use App\Models\PoliKlinik;
use Illuminate\Http\Request;

class BerandaAdminController extends Controller
{
    public function index()
    {
        // Data pasien
        $dataPasien = Pasien::paginate(5);
        $jumlahDataPasien = Pasien::count();

        // Data poliklinik
        $dataPoliKlinik = PoliKlinik::paginate(5);

        // Data pendaftaran list pasien
        $pendaftaranPasien = Pendaftaran::with(['poliklinik', 'pasien'])
            ->orderBy('antrian', 'asc')
            ->paginate(5);

        // Data pendaftaran pasien yang sudah di periksa 
        $pendaftaranDiperiksa = Pendaftaran::with(['poliklinik', 'pasien', 'statusPoli' => function ($query) {
            $query->whereNotNull('status_poli');
        }])
            ->whereHas('statusPoli')
            ->orderBy('antrian', 'asc')
            ->paginate(5);
        return view(
            'admin.beranda_index',
            compact(
                'dataPoliKlinik',
                'dataPasien',
                'jumlahDataPasien',
                'pendaftaranPasien',
                'pendaftaranDiperiksa'
            )
        );
    }
}
