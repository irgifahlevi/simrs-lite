<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasienRequest extends FormRequest
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
            'alamat' => 'required',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_telpon' => 'required|numeric',
        ];
    }


    public function messages()
    {
        return [
            'nama.required' => 'Nama harus di isi',
            'alamat.required' => 'Alamat harus di isi',
            'umur.required' => 'Umur harus di isi',
            'jenis_kelamin.required' => 'Jenis Kelamin harus di isi',
            'no_telpon.required' => 'No telpon harus di isi',
        ];
    }
}
