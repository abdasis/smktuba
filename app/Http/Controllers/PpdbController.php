<?php

namespace App\Http\Controllers;

use App\Http\Requests\PpdbRequest;
use App\Models\Father;
use App\Models\Mother;
use App\Models\Student;
use App\Models\Wali;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PpdbRequest $request)
    {

        try {
            DB::beginTransaction();
            $newSiswa = new Student();
            $newSiswa->nama_lengkap = $request->get('nama_lengkap');
            $newSiswa->jenis_kelamin = $request->get('jenis_kelamin');
            $newSiswa->nisn = $request->get('nisn');
            $newSiswa->asal_sekolah = $request->get('asal_sekolah');
            $newSiswa->lulusan_angkatan = $request->get('lulusan_angkatan');
            $newSiswa->nik = $request->get('nik');
            $newSiswa->tempat_lahir = $request->get('tempat_lahir');
            $newSiswa->tanggal_lahir = $request->get('tanggal_lahir');
            $newSiswa->akta = $request->get('akta');
            $newSiswa->agama = $request->get('agama');
            $newSiswa->alamat = $request->get('alamat');
            $newSiswa->rt = $request->get('rt');
            $newSiswa->rw = $request->get('rw');
            $newSiswa->nama_dusun = $request->get('nama_dusun');
            $newSiswa->kelurahan = $request->get('kelurahan');
            $newSiswa->kecamatan = $request->get('kecamatan');
            $newSiswa->kode_pos = $request->get('kode_pos');
            $newSiswa->transportasi = $request->get('transportasi');
            $newSiswa->tinggal_bersama = $request->get('tinggal_bersama');
            $newSiswa->anak_ke = $request->get('anak_ke');
            $newSiswa->kks = $request->get('kks');
            $newSiswa->no_kks = $request->get('no_kks');
            $newSiswa->pkh = $request->get('pkh');
            $newSiswa->no_pkh = $request->get('no_pkh');
            $newSiswa->kip = $request->get('kip');
            $newSiswa->no_kip = $request->get('no_kip');
            $newSiswa->foto_diri = 'default.jpg';
            $newSiswa->save();

            $newAyah = new Father();
            $newAyah->nama_ayah = $request->get('nama_ayah');
            $newAyah->nik_ayah = $request->get('nik_ayah');
            $newAyah->tahun_lahir_ayah = $request->get('tahun_lahir_ayah');
            $newAyah->pendidikan_terakhir_ayah = $request->get('pendidikan_terakhir_ayah');
            $newAyah->pekerjaan_ayah = $request->get('pekerjaan_ayah');
            $newAyah->penghasilan_ayah = $request->get('penghasilan_ayah');
            $newAyah->student_id = $newSiswa->id;
            $newAyah->save();

            // create mother object
            $newIbu = new Mother();
            $newIbu->nama_ibu = $request->get('nama_ibu');
            $newIbu->nik_ibu = $request->get('nik_ibu');
            $newIbu->tahun_lahir_ibu = $request->get('tahun_lahir_ibu');
            $newIbu->pendidikan_terakhir_ibu = $request->get('pendidikan_terakhir_ibu');
            $newIbu->pekerjaan_ibu = $request->get('pekerjaan_ibu');
            $newIbu->penghasilan_ibu = $request->get('penghasilan_ibu');
            $newIbu->student_id = $newSiswa->id;
            $newIbu->save();

            // create mother object
            $newWali = new Wali();
            $newWali->nama_wali = $request->get('nama_wali');
            $newWali->nik_wali = $request->get('nik_wali');
            $newWali->tahun_lahir_wali = $request->get('tahun_lahir_wali');
            $newWali->pendidikan_terakhir_wali = $request->get('pendidikan_terakhir_wali');
            $newWali->pekerjaan_wali = $request->get('pekerjaan_wali');
            $newWali->penghasilan_wali = $request->get('penghasilan_wali');
            $newWali->student_id = $newSiswa->id;
            $newWali->save();

            // create object contact
            $newContact = new Contact();
            $newContact->nomor_rumah = $request->get('nomor_rumah');
            $newContact->nomor_hp = $request->get('nomor_hp');
            $newContact->email = $request->get('email');
            $newContact->save();
            DB::commit();
            Alert::success('Selamat', 'Data anda sudah berhasil di daftarkan');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollback();
            Alert::warning('Oppps', 'Maaf terjadi kesalahan saat pengisian data');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
