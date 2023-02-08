<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SimpanPoliKlinikRequest;
use App\Http\Requests\Admin\UpdatePoliKlinikRequest;
use App\Models\PoliKlinik;
use Illuminate\Http\Request;

class PoliKlinikController extends Controller
{
    public function tambahDataPoliklinik()
    {
        return view('admin.tambah_data_poliklinik');
    }


    public function simpanDataPoliklinik(SimpanPoliKlinikRequest $request)
    {
        // dd($request->all());
        $poliKlinik = new PoliKlinik();
        $poliKlinik->nama_poli = $request->input('nama_poli');
        $poliKlinik->save();
        return redirect()->route('admin.beranda')->with('success', 'Data poliklinik berhasil ditambahkan');
    }

    public function editDataPoliklinik($id)
    {
        $dataPoliKlinik = PoliKlinik::find($id);
        return view('admin.edit_data_poliklinik', compact('dataPoliKlinik'));
    }


    public function updateDataPoliklinik(UpdatePoliKlinikRequest $request, $id)
    {
        // dd($request->all());

        $dataPoliKlinik = $request->validated();
        $updatePoliKlinik = PoliKlinik::findOrFail($id);
        $updatePoliKlinik->update($dataPoliKlinik);

        return redirect()->route('admin.beranda')->with('success', 'Data poliklinik berhasil di edit');
    }


    public function hapusDataPoliklinik($id)
    {
        $dataPoliKlinik = PoliKlinik::findOrFail($id);
        $dataPoliKlinik->delete();

        return redirect()->route('admin.beranda')->with('success', 'Data poliklinik berhasil di hapus');
    }
}
