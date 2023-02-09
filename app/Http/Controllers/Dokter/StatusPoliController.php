<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dokter\StatusPoliRequest;
use App\Models\Pendaftaran;
use App\Models\StatusPoli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusPoliController extends Controller
{
    public function buatPoli($id)
    {

        $idPendaftaran = Pendaftaran::findOrFail($id);
        return view('dokter.buat_status_poli', compact('idPendaftaran'));
    }

    public function simpanPoli(StatusPoliRequest $request, $id)
    {
        // dd($request->all());

        // Dapatkan id pendaftar
        $idPendaftar = Pendaftaran::findOrFail($id);

        // Simpan status poli ke tabel status_poli
        $dataStatusPoli = new StatusPoli();
        $dataStatusPoli->pendaftaran_id = $idPendaftar->id;
        $dataStatusPoli->dokter_id = Auth::user()->dokter->id;
        $dataStatusPoli->status_poli = 'Sudah';
        $dataStatusPoli->tanggal = $request->input('tanggal');
        $dataStatusPoli->diagnosa = $request->input('diagnosa');
        $dataStatusPoli->save();


        return redirect()->route('dokter.beranda')->with('success', 'Data dokter berhasil ditambahkan');
    }
}
