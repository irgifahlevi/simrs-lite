<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Pendaftaran;
use App\Models\PoliKlinik;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        // Data yang sudah di poli 
        $pendaftaranDiperiksa = Pendaftaran::with('pasien', 'statusPoli')
            ->whereHas('statusPoli', function ($query) {
                $query->where('status_poli', 'Sudah');
            })
            ->get();

        return view('admin.beranda_index', compact('dataPoliKlinik', 'dataPasien', 'jumlahDataPasien', 'pendaftaranPasien', 'pendaftaranDiperiksa'));
    }
}
