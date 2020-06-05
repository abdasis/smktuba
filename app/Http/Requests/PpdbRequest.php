<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PpdbRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nama_lengkap' => 'required|min:3',
            'jenis_kelamin' => 'required',
            'nisn'  => 'unique:students,nisn|min:10',
            'asal_sekolah' => 'required|min:5',
            'lulusan_angkatan' => 'required|min:2',
            'nik'   => 'required|min:10',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required|min:5',
            'nama_dusun' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'transportasi' => 'required',
            'tinggal_bersama' => 'required',
            'anak_ke' => 'required',
            'kks' => 'required',
            'pkh' => 'required',
            'kip' => 'required',

            // validation father
            'nama_ayah' => 'required',

            // valition mother
            'nama_ibu' => 'required',

            // validation wali
            'nama_wali' => 'required',


            'nomor_rumah' => 'required|min:10',
            'nomor_hp' => 'required|min:10',
            'email' => 'required|email|unique:contacts,email'
        ];
    }
}
