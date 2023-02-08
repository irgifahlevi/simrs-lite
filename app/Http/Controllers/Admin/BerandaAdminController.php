<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use App\Models\PoliKlinik;
use Illuminate\Http\Request;

class BerandaAdminController extends Controller
{
    public function index()
    {
        // Data pasien
        $dataPasien = Pasien::paginate(5);
        $jumlahDataPasien = Pasien::count();


        $dataPoliKlinik = PoliKlinik::paginate(5);
        return view('admin.beranda_index', compact('dataPoliKlinik', 'dataPasien', 'jumlahDataPasien'));
    }
}
