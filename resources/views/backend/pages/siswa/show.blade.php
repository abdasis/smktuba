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
        </div>
    </div>
</div>

@endsection
