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
      <div class="breadcrumb-item">Daftar Siswa</div>
    </div>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>Daftar Siswa Terdafar</h4>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-borderless" id="table-2">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>NISN</th>
                      <th>JK</th>
                      <th>Asal Sekolah</th>
                      <th>Tahun Lulusan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($siswas as $key => $siswa)
                    <tr>
                        <td>{{ $siswa->nama_lengkap }}</td>
                        <td>{{ $siswa->nisn }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                        <td>
                          {{ $siswa->asal_sekolah }}
                        </td>
                        <td>{{ $siswa->lulusan_angkatan }}</td>
                        <td>
                            <a href="{{ route('siswa.show', $siswa->id) }}">
                                <button class="btn btn-sm btn-info"><i class="fa fa-eye"></i></button>
                            </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
        </div>

    </div>
</div>
@endsection


@section('js')
  <script src="{{ url('/') }}/assets/js/page/modules-datatables.js"></script>
@endsection
