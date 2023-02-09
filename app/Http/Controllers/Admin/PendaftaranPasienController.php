<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SimpanPendaftaranRequest;
use App\Models\Pasien;
use App\Models\Pendaftaran;
use App\Models\PoliKlinik;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PendaftaranPasienController extends Controller
{
    public function tambahPendaftaran()
    {
        $dataPoliKlinik = PoliKlinik::all();
        $dataPasienLama = Pasien::all();
        return view('admin.tambah_data_pendaftaran', compact('dataPoliKlinik', 'dataPasienLama'));
    }
    public function simpanPendaftaran(SimpanPendaftaranRequest $request)
    {
        // $request->validated();
        // dd($request->all());

        // Tanggal pendaftaran di set otomatis
        $tanggalPendaftaran = Carbon::now();

        // Mendapatkan data pendaftaran terakhir
        $dataPendaftaran = Pendaftaran::orderBy('created_at', 'desc')->first();

        // Jika data pendaftaran terahkir ada
        if (!empty($dataPendaftaran)) {
            $antrian = sprintf("%03d", $dataPendaftaran->antrian + 1);
        } else { // Jika data pendaftaran terahkir tidak ada
            $antrian = '001';
        }

        // Counter antrian di mulai dari 001


        // Jika request kategori baru
        if ($request->kategori == 'Baru') {

            // Buat data pasien baru simpan ke dalam tabel pasien
            $pasienBaru = Pasien::create([
                'nama' => $request->input('nama_pasien_baru'),
                'umur' => $request->input('umur_pasien_baru'),
                'alamat' => $request->input('alamat_pasien_baru'),
                'jenis_kelamin' => $request->input('jk_pasien_baru'),
                'no_telpon' => $request->input('telpon_pasien_baru'),
            ]);

            // Buat data pendaftaran baru dengan relasi pasien baru
            Pendaftaran::create([
                'poliklinik_id' => $request->input('poliklinik_id'),
                'tanggal_pendaftaran' => $tanggalPendaftaran,
                'antrian' => $antrian,
                'pasien_id' => $pasienBaru->id,
                'kategori' => $request->input('kategori'),
            ]);
        } else { // Jika kategori pasien lama

            // Buat data pendaftara baru dengan relasi pasien lama
            Pendaftaran::create([
                'poliklinik_id' => $request->input('poliklinik_id'),
                'pasien_id' => $request->input('pasien_id'),
                'tanggal_pendaftaran' => $tanggalPendaftaran,
                'antrian' => $antrian,
                'kategori' => $request->input('kategori'),
            ]);
        }

        return redirect()->route('admin.beranda')->with('success', 'Data pendaftaran pasien berhasil ditambahkan');
    }

    // public function lihatStatus($id)
    // {

    // }
}
