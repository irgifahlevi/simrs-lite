<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SimpanPendaftaranRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'poliklinik_id' => 'required|exists:poli_kliniks,id',
            'kategori' => 'required|in:Lama,Baru',
            'pasien_id' => 'required_if:kategori,Lama',
            'nama_pasien_baru' => 'required_if:kategori,Baru',
            'umur_pasien_baru' => 'required_if:kategori,Baru',
            'jk_pasien_baru' => 'required_if:kategori,Baru',
            'alamat_pasien_baru' => 'required_if:kategori,Baru',
            'telpon_pasien_baru' => 'required_if:kategori,Baru'
        ];
    }


    public function messages()
    {
        return [
            'kategori.required' => 'Pilih salah satu kategori',
            'nama_pasien_baru.required_if'  => 'Nama pasien baru harus di isi',
            'umur_pasien_baru.required_if'  => 'Umur pasien baru harus di isi',
            'jk_pasien_baru.required_if'  => 'Jenis kelamin baru harus di isi',
            'alamat_pasien_baru.required_if'  => 'Alamat pasien baru harus di isi',
            'telpon_pasien_baru.required_if'  => 'No Telepon harus di isi',
        ];
    }
}
