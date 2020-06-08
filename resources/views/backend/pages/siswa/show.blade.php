@extends('backend.layouts.app')

@section('content')
<div class="section-header">
    <div class="section-header-back">
      <i class="fa fa-list"></i>
    </div>
    <h1>Daftar Siswa</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="#">Siswa</a></div>
      <div class="breadcrumb-item">Detail Siswa</div>
    </div>
</div>


<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Photo Profil
            </div>

            <div class="card-body">
                <img src="{{ $siswa->foto_diri }}" alt="" class="img-thumbnail img-rounded">
                <h3 class="text-center">
                    {{ $siswa->nama_lengkap }}
                </h3>
                <h6 class="text-center bg-soft-info text-info">
                    {{ $siswa->nisn }}
                </h6>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Biodata Lengkap
            </div>
            <div class="card-body">
                <h5 class="card-title">Data Siswa</h5>
                <table class="table table-hover table-sm table-bordered">
                    <tr>
                        <td><b>Nama Lengkap</b></td>
                        <td>:</td>
                        <td>{{ $siswa->nama_lengkap }}</td>
                    </tr>

                    <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td>:</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                    </tr>

                    <tr>
                        <td><b>NISN</b></td>
                        <td>:</td>
                        <td>{{ $siswa->nisn }}</td>
                    </tr>

                    <tr>
                        <td><b>NIK</b></td>
                        <td>:</td>
                        <td>{{ $siswa->nik }}</td>
                    </tr>

                    <tr>
                        <td><b>Asal Sekolah</b></td>
                        <td>:</td>
                        <td>{{ $siswa->asal_sekolah }}</td>
                    </tr>

                    <tr>
                        <td><b>Angkatan</b></td>
                        <td>:</td>
                        <td>{{ $siswa->lulusan_angkatan }}</td>
                    </tr>

                    <tr>
                        <td><b>TTL</b></td>
                        <td>:</td>
                        <td>{{ $siswa->tempat_lahir . ',' . ' ' .   date('d-m-Y', strtotime($siswa->tanggal_lahir)) }}</td>
                    </tr>

                    <tr>
                        <td><b>Akta</b></td>
                        <td>:</td>
                        <td>{{ $siswa->akta }}</td>
                    </tr>

                    <tr>
                        <td><b>Agama</b></td>
                        <td>:</td>
                        <td>{{ $siswa->agama }}</td>
                    </tr>

                    <tr>
                        <td><b>Alamat</b></td>
                        <td>:</td>
                        <td>{{ $siswa->alamat }}</td>
                    </tr>

                    <tr>
                        <td><b>RT</b></td>
                        <td>:</td>
                        <td>{{ $siswa->rt }}</td>
                    </tr>

                    <tr>
                        <td><b>RW</b></td>
                        <td>:</td>
                        <td>{{ $siswa->rw }}</td>
                    </tr>

                    <tr>
                        <td><b>Nama Dusun</b></td>
                        <td>:</td>
                        <td>{{ $siswa->nama_dusun }}</td>
                    </tr>

                    <tr>
                        <td><b>Kelurahan</b></td>
                        <td>:</td>
                        <td>{{ $siswa->kelurahan }}</td>
                    </tr>

                    <tr>
                        <td><b>Kecamatan</b></td>
                        <td>:</td>
                        <td>{{ $siswa->kecamatan }}</td>
                    </tr>

                    <tr>
                        <td><b>Kode Pos</b></td>
                        <td>:</td>
                        <td>{{ $siswa->kode_pos }}</td>
                    </tr>

                    <tr>
                        <td><b>Tranportasi</b></td>
                        <td>:</td>
                        <td>{{ $siswa->transportasi }}</td>
                    </tr>

                    <tr>
                        <td><b>Tinggal Bersama</b></td>
                        <td>:</td>
                        <td>{{ $siswa->tinggal_bersama }}</td>
                    </tr>

                    <tr>
                        <td><b>Anak Ke</b></td>
                        <td>:</td>
                        <td>{{ $siswa->anak_ke }}</td>
                    </tr>

                    <tr>
                        <td><b>KKS</b></td>
                        <td>:</td>
                        <td>{{ $siswa->kks  }}  ({{ $siswa->no_kks ? $siswa->no_kks : '~' }})</td>
                    </tr>

                    <tr>
                        <td><b>NISN</b></td>
                        <td>:</td>
                        <td>{{ $siswa->nisn }}</td>
                    </tr>

                    <tr>
                        <td><b>PKH</b></td>
                        <td>:</td>
                        <td>{{ $siswa->pkh }}  ({{ $siswa->no_pkh }})</td>
                    </tr>

                    <tr>
                        <td><b>KIP</b></td>
                        <td>:</td>
                        <td>{{ $siswa->kip }}  ({{ $siswa->no_kip }})</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
