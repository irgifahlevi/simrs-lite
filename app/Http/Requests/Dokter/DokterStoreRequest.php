<?php

namespace App\Http\Requests\Dokter;

use Illuminate\Foundation\Http\FormRequest;

class DokterStoreRequest extends FormRequest
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
            'nama' => 'required|string|max:255',
            'poliklinik_id' => 'required|exists:poli_kliniks,id',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:255',
            'no_telpon' => 'required|numeric',
            // 'user_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama lengkap harus di isi',
            'poliklinik_id.required.exists:poli_kliniks' => 'Poli Klinik harus di isi',
            'umur.required' => 'Umur harus di isi',
            'jenis_kelamin.required' => 'Jenis kelamin harus di isi',
            'alamat.required' => 'Alamat harus di isi',
            'no_telpon.required' => 'No telpon harus di isi',
        ];
    }
}
