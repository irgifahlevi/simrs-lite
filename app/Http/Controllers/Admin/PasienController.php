<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SimpanPasienRequest;
use App\Http\Requests\Admin\UpdatePasienRequest;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function tambahDataPasien()
    {
        return view('admin.tambah_data_pasien');
    }


    public function simpanDataPasien(SimpanPasienRequest $request)
    {
        $dataPasien = new Pasien();
        $dataPasien->nama = $request->input('nama');
        $dataPasien->umur = $request->input('umur');
        $dataPasien->jenis_kelamin = $request->input('jenis_kelamin');
        $dataPasien->alamat = $request->input('alamat');
        $dataPasien->no_telpon = $request->input('no_telpon');

        $dataPasien->save();

        return redirect()->route('admin.beranda')->with('success', 'Data pasien berhasil ditambahkan');
    }


    public function editDataPasien($id)
    {
        $dataPasien = Pasien::find($id);
        return view('admin.edit_data_pasien', compact('dataPasien'));
    }


    public function updateDataPasien(UpdatePasienRequest $request, $id)
    {
        // dd($request->all());

        $dataPasien = $request->validated();
        $updatePasien = Pasien::findOrFail($id);
        $updatePasien->update($dataPasien);

        return redirect()->route('admin.beranda')->with('success', 'Data pasien berhasil di edit');
    }


    public function hapusDataPasien($id)
    {
        $dataPasien = Pasien::findOrFail($id);
        $dataPasien->delete();

        return redirect()->back()->with('success', 'Data pasien berhasil dihapus');
    }
}
