<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dokter\DokterStoreRequest;
use App\Models\Dokter;
use App\Models\PoliKlinik;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class BerandaDokterController extends Controller
{
    public function index()
    {
        $dataPoliKlinik = PoliKlinik::all();
        return view('dokter.beranda_index', compact('dataPoliKlinik'));
    }


    public function tambahData()
    {
        $dataPoliKlinik = PoliKlinik::all();
        return view('dokter.tambah_data_dokter', compact('dataPoliKlinik'));
    }




    public function simpanData(DokterStoreRequest $request)
    {
        // dd($request->all());

        // Mengambil data user yang sedang login
        $user = Auth::user();

        // Isi data dokter u
        $dokter = Dokter::where('user_id', $user->id)->first();

        if (!$dokter) {
            $dokter = Dokter::create([
                'user_id' => $user->id,
                'nama' => $request->input('nama'),
                'poliklinik_id' => $request->input('poliklinik_id'),
                'umur' => $request->input('umur'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'alamat' => $request->input('alamat'),
                'no_telpon' => $request->input('no_telpon'),
            ]);
        } else {
            $dokter->update([
                'nama' => $request->input('nama'),
                'poliklinik_id' => $request->input('poliklinik_id'),
                'umur' => $request->input('umur'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'alamat' => $request->input('alamat'),
                'no_telpon' => $request->input('no_telpon'),
            ]);
        }


        return redirect()->route('dokter.beranda')->with('success', 'Data dokter berhasil ditambahkan');
    }


    public function tampilProfile()
    {

        $dataDokter = Dokter::with('user')->where('user_id', auth()->user()->id)->first();

        return view('dokter.lihat_profile_saya', compact('dataDokter'));
    }
}
