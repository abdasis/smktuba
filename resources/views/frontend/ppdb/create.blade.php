<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SMK Tunas Bangsa</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ url('/') }}/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/assets/modules/fontawesome/css/all.min.css">

  <!-- Plugins -->
  <link rel="stylesheet" href="{{ url('/') }}/assets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/components.css">
</head>

<body class="layout-3">
    @include('sweetalert::alert')
  <div id="app">
    <div class="main-wrapper container-fluid">
      <div class="navbar-bg shadow" style="height: 70px;  background: #56CCF2;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #2F80ED, #56CCF2);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #2F80ED, #56CCF2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      ;">

        <nav class="navbar navbar-expand-lg main-navbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="{{ url('/') }}/index.html" class="nav-link"><i class="fa fa-arrow-left"></i><span> Dashboard</span></a>
            </li>
          </ul>
        </nav>

        <div class="container" style="margin-top: 170px">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                      <h5 class="text-center m-auto">PENERIMAAN SISWA BARU SMK TUNAS BANGSA</h5>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="badge badge-success">Pendaftaran Secara Online</div>
                          <ol>
                            <li>Mengisi Formulir</li>
                            <li>Mendownload hasil formulir yang sudah diisi</li>
                            <li>Menyerahkan kepada panitia peneriaan siswa baru</li>
                            <li>Sertakan hardcopy sebagai berikut:
                              <ul>
                                <li>Hardcopy Kartu Keluarga (KK)</li>
                                <li>Hardcopy Akta Kelahiran (jika ada)</li>
                                <li>Hardcopy Ijazah + SKHU (jika ada, jika belum ada bisa diganti dengan Surat Keterangan Lulus
                                  (SKL)</li>

                              </ul>
                            </li>
                            <li>Serahkan kepanitia dalam map</li>
                          </ol>
                          </p>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="badge badge-danger">Pendafatran Offline</div>
                          <ol>
                            <li>Mendownload formulir pada link dibawah</li>
                            <li>download formulir Offline <a href="{{ url('/') }}/assets/2_F-PESERTA DIDIK_2020.b.pdf" class="btn"><span
                                  class="fa fa-download"></span> Klik
                                disni</a></li>
                            <li>Menyerahkan formulir ke Panitia menyertakan data sebagai berikut :
                              <ul>
                                <li>Hardcopy Kartu Keluarga (KK)</li>
                                <li>Hardcopy Akta Kelahiran (jika ada)</li>
                                <li>Hardcopy Ijazah + SKHU (jika ada, jika belum ada bisa diganti dengan Surat Keterangan
                                  Lulus (SKL)</li>
                                <li>Foto 3x4 4 lembar</li>
                              </ul>
                            </li>
                            <li>Serahkan kepanitia dalam map</li>
                          </ol>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="alert alert-primary text-center m-auto">
                        <h5 class="mb-0 ">INFO LEBIH LANJUT HUBUNGI :</h5>
                        <p>0859-3138-8460 (Drs. H Munada Efendi) | 0852-3048-2737 (Ahmad Zakaria) | 0838-5309-7061 (Suhadak Safalas)
                        </p>
                      </div>
                    </div>
                </div>
            </div>

           <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ol type="1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ol>
            </div>
        @endif
           </div>

            <form action="{{ route('ppdb.store') }}" method="POST" enctype="multipart/form-data"  class="container">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <p><i class="fa fa-user-graduate"></i> Identitas Peserta Didik</p>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input required type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" id="" class="form-control {{ $errors->has('nama_lengkap') ? 'is-invalid' : '' }} " aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Nama peserta didik sesuai dokumen resmi yang
                            berlaku
                            (Akta atau Ijazah sebelumnya)</small>
                            <small class="text-danger">{{ $errors->first('nama_lengkap') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" required class="form-control">
                                <option value="">Pilih jenis kelamin</option>
                                <option {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }} value="Laki-Laki">Laki-laki</option>
                                <option {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }} value="Perempuan">Perempuan</option>
                            </select>
                            <small class="text-danger">{{ $errors->first('jenis_kelamin') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">NISN</label>
                            <input type="text" name="nisn" value="{{ old('nisn') }}" id="" class="form-control " aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Nomor Induk Siswa Nasional peserta didik</small>
                            <small class="text-danger">{{ $errors->first('nisn') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" value="{{ old('asal_sekolah') }}" class="form-control" aria-describedby="helpId" required>
                            <small class="text-danger">{{ $errors->first('asal_sekolah') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Lulusan Angkatan</label>
                            <input type="number" name="lulusan_angkatan" value="{{ old('lulusan_angkatan') }}" class="form-control" aria-describedby="helpId" required>
                            <small class="text-danger">{{ $errors->first('lulusan_angkatan') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Upload Foto Diri</label>
                            <input type="file" name="foto_diri" value="{{ old('foto_diri') }}" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Upload Foto Formal</small> <br>
                            <small class="text-danger">{{ $errors->first('foto_diri') }}</small>


                        </div>

                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="number" name="nik" value="{{ old('nik') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Nomor Induk Kependudukan yang tercantum pada Kartu
                            Keluarga</small>
                            <small class="text-danger">{{ $errors->first('nik') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Tempat lahir peserta didik sesuai dokumen resmi
                            yang
                            berlaku</small><br>
                            <small class="text-danger">{{ $errors->first('tempat-lahir') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Tanggal lahir peserta didik sesuai dokumen resmi
                            yang berlaku.</small><br>
                            <small class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Akta</label>
                            <input type="text" name="akta" value="{{ old('akta') }}" id="" class="form-control" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Nomor registrasi Akta Kelahiran. (diisi jika
                            ada)</small><br>
                            <small class="text-danger">{{ $errors->first('akta') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Agama</label>
                            <select name="agama" id="" class="form-control">
                                <option  value="">Pilih agama kepercayaan</option>
                                <option {{ old('agama') == 'Islam' ? 'selected' : '' }} value="Islam">Islam</option>
                                <option {{ old('agama') == 'Kristen/Protestan' ? 'selected' : '' }} value="Kristen/Protestan">Kristen/Protestan</option>
                                <option {{ old('agama') == 'Katholik' ? 'selected' : '' }} value="Katholik">Katholik</option>
                                <option {{ old('agama') == 'Hindu' ? 'selected' : '' }} value="Hindu">Hindu</option>
                                <option {{ old('agama') == 'Budha' ? 'selected' : '' }} value="Budha">Budha</option>
                                <option {{ old('agama') == 'Kong hu chu' ? 'selected' : '' }} value="Kong hu chu">Kong hu chu</option>
                            </select>
                            <small class="text-danger">{{ $errors->first('agama') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="" cols="30" rows="10" class="form-control">{{ old('alamat') }}</textarea>
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">RT/RW</label>
                            <table style="width: 100%;">
                            <tr>
                                <th><input type="number" name="rt" value="{{ old('rt') }}" class="form-control" placeholder="RT"></th>
                                <th>/</th>
                                <th><input type="number" name="rw" value="{{ old('rw') }}" class="form-control" placeholder="RW"></th>
                            </tr>
                            </table>
                            <small class="text-danger">{{ $errors->first('rt') }}</small>
                            <small class="text-danger">{{ $errors->first('rw') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Nama Dusun</label>
                            <input type="text" name="nama_dusun" value="{{ old('nama_dusun') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small class="text-danger">{{ $errors->first('nama_dusun') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Kelurahan</label>
                            <input type="text" name="kelurahan" value="{{ old('kelurahan') }}" id="" class="form-control" placeholder=" Kelurahan / Desa"
                            aria-describedby="helpId" required>
                            <small class="text-danger">{{ $errors->first('kelurahan') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" name="kecamatan" value="{{ old('kecamatan') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small class="text-danger">{{ $errors->first('kecamatan') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Kode Pos</label>
                            <input type="number" name="kode_pos" value="{{ old('kode_pos') }}" id="" class="form-control" aria-describedby="helpId">
                            <small class="text-danger">{{ $errors->first('kode_pos') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Moda Transportasi</label>
                            <select name="transportasi" id="" class="form-control" required>
                                <option value="">-- Pilih Transportasi --</option>
                                <option {{ old('transportasi') == 'Sepeda Motor' ? 'selected' : '' }} value="Sepeda Motor">Sepeda Motor</option>
                                <option {{ old('transportasi') == 'Jalan Kaki' ? 'selected' : '' }} value="Jalan Kaki">Jalan Kaki</option>
                                <option {{ old('transportasi') == 'Antra Jemput' ? 'selected' : '' }} value="Antar Jemput">Antar Jemput</option>
                                <option {{ old('transportasi') == 'Naik Motor' ? 'selected' : '' }} value="Naik Angkot">Naik Angkot</option>
                            </select>
                            <small class="text-danger">{{ $errors->first('transportasi') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Tinggal Bersama</label>
                            <select name="tinggal_bersama" id="" class="form-control" required>
                                <option value="">-- Pilih tinggal bersama -- </option>
                                <option {{ old('tinggal_bersama') == 'Orang Tua' ? 'selected' : '' }} value="Orang Tua">Orang Tua</option>
                                <option {{ old('tinggal_bersama') == 'Kakek/Nenek' ? 'selected' : '' }} value="Kakek/Nenek">Kakek / Nenek</option>
                                <option {{ old('tinggal_bersama') == 'Paman/Bibik' ? 'selected' : '' }} value="Paman/Bibik">Paman / Bibik</option>
                                <option {{ old('tinggal_bersama') == 'Lainnya' ? 'selected' : '' }} value="Lainnya">Lainnya</option>
                            </select>
                            <small class="text-danger">{{ $errors->first('tinggal_bersama') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Anak keberapa berdasarkan KK?</label>
                            <input type="number" name="anak_ke" value="{{ old('anak_ke') }}" class="form-control" required>
                            <small class="text-danger">{{ $errors->first('anak_ke') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Punya KKS? </label>
                            <select name="kks" id="kks" class="form-control" required>
                            <option value=""></option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                            </select>
                            <small id="helpId" class="text-muted">Kartu Keluarga Sejahtera</small><br>
                            <small class="text-danger">{{ $errors->first('kks') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Nomor KKS</label>
                            <input type="text" name="no_kks" value="{{ old('no_kks') }}" id="no_kks" class="form-control" aria-describedby="helpId">
                        </div>


                        <div class="form-group">
                            <label for="">Punya PKS/PKH?</label>
                            <select name="pkh" id="pkh" class="form-control" required>
                                <option value=""></option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                            <small class="text-danger">{{ $errors->first('pkh') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Nomor PKS</label>
                            <input type="text" name="no_pks" value="{{ old('no_pks') }}" id="no_pks" class="form-control" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="">Punya KIP?</label>
                            <select name="kip" id="kip" class="form-control" required>
                                <option value=""></option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                            <small id="helpId" class="text-muted">Kartu Indonesia Pintar</small><br>
                            <small class="text-danger">{{ $errors->first('kip') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Nomor KIP</label>
                            <input type="text" name="no_kip" value="{{ old('no_kip') }}" id="no_kip" class="form-control" aria-describedby="helpId">
                            <small class="text-danger">{{ $errors->first('no_kip') }}</small>

                        </div>


                        </div>
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <p><i class="fa fa-user-tie"></i> Data Ayah Kandung</p>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Ayah Kandung</label>
                            <input type="text" name="nama_ayah" value="{{ old('nama_ayah') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Nama ayah kandung peserta didik sesuai dokumen
                            resmi yang berlaku</small><br>
                            <small class="text-danger">{{ $errors->first('nama_ayah') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">NIK Ayah</label>
                            <input type="text" name="nik_ayah" value="{{ old('nik_ayah') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Nomor Induk Kependudukan yang tercantum pada Kartu
                            Keluarga atau KTP ayah kandung</small>
                            <small class="text-danger">{{ $errors->first('nik_ayah') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Tahun Lahir Ayah</label>
                            <input type="date" name="tahun_lahir_ayah" value="{{ old('tahun_lahir_ayah') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Tahun Lahir Ayah Peserta Didik</small>
                        </div>

                        <div class="form-group">
                            <label>Pendidikan Terakhir Ayah</label>
                            <select name="pendidikan_terakhir_ayah" id="" class="form-control" required>
                                <option value=""></option>
                                <option {{ old('pendidikan_terakhir_ayah') == 'Tidak Sekolah' ? 'selected' : '' }} value="Tidak Sekolah">Tidak Sekolah</option>
                                <option {{ old('pendidikan_terakhir_ayah') == 'Putus SD' ? 'selected' : '' }} value="Putus SD">Putus SD</option>
                                <option {{ old('pendidikan_terakhir_ayah') == 'SD/Sederajat' ? 'selected' : '' }} value="SD/Sederajat">SD / Sederajat</option>
                                <option {{ old('pendidikan_terakhir_ayah') == 'SMP/Sederajat' ? 'selected' : '' }} value="SMP/Sederajat">SMP / Sederajat</option>
                                <option {{ old('pendidikan_terakhir_ayah') == 'SMA/Sederajat' ? 'selected' : '' }} value="SMA/Sederajat">SMA / Sederajat</option>
                                <option {{ old('pendidikan_terakhir_ayah') == 'D1' ? 'selected' : '' }} value="D1">D1</option>
                                <option {{ old('pendidikan_terakhir_ayah') == 'D2' ? 'selected' : '' }} value="D2">D2</option>
                                <option {{ old('pendidikan_terakhir_ayah') == 'D3' ? 'selected' : '' }} value="D3">D3</option>
                                <option {{ old('pendidikan_terakhir_ayah') == 'D4/S1' ? 'selected' : '' }} value="D4/S1">D4/S1</option>
                                <option {{ old('pendidikan_terakhir_ayah') == 'S2' ? 'selected' : '' }} value="S2">S2</option>
                                <option {{ old('pendidikan_terakhir_ayah') == 'S3' ? 'selected' : '' }} value="S3">S3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Pekerjaan Ayah</label>
                            <select name="pekerjaan_ayah" id="" class="form-control" required>
                            <option value="">-- Pilih Pekerjaan Ayah --</option>
                            <option {{ old('pekerjaan_ayah') == 'Tidak Bekerja' ? 'selected' : '' }} value="Tidak Bekerja">Tidak Bekerja</option>
                            <option {{ old('pekerjaan_ayah') == 'Nelayan' ? 'selected' : '' }} value="Nelayan">Nelayan</option>
                            <option {{ old('pekerjaan_ayah') == 'Petani' ? 'selected' : '' }} value="Petani">Petani</option>
                            <option {{ old('pekerjaan_ayah') == 'Peternak' ? 'selected' : '' }} value="Peternak">Peternak</option>
                            <option {{ old('pekerjaan_ayah') == 'PNS/TNI/Polri' ? 'selected' : '' }} value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                            <option {{ old('pekerjaan_ayah') == 'Karyawan Swasta' ? 'selected' : '' }} value="Karyawan Swasta">Karyawan Swasta</option>
                            <option {{ old('pekerjaan_ayah') == 'Pedagang Kecil' ? 'selected' : '' }} value="Pedagang Kecil">Pedagang Kecil</option>
                            <option {{ old('pekerjaan_ayah') == 'Pedagang Besar' ? 'selected' : '' }} value="Pedagang Besar">Pedagang Besar</option>
                            <option {{ old('pekerjaan_ayah') == 'Wiraswasta' ? 'selected' : '' }} value="Wiraswasta">Wiraswasta </option>
                            <option {{ old('pekerjaan_ayah') == 'Buruh' ? 'selected' : '' }} value="Buruh">Buruh</option>
                            <option {{ old('pekerjaan_ayah') == 'Pensiuanan' ? 'selected' : '' }} value="Pensiunan">Pensiunan</option>
                            <option {{ old('pekerjaan_ayah') == 'Tenaga Kerja Indonesia' ? 'selected' : '' }} value="Tenaga Kerja Indonesia">Tenaga Kerja Indonesia</option>
                            <option {{ old('pekerjaan_ayah') == 'Tidak dapat diterapkan' ? 'selected' : '' }} value="Tidak dapat diterapkan">Tidak dapat diterapkan</option>
                            <option {{ old('pekerjaan_ayah') == 'Sudah Meninggal' ? 'selected' : '' }} value="Sudah Meninggal">Sudah Meninggal</option>
                            <option {{ old('pekerjaan_ayah') == 'Lainnya' ? 'selected' : '' }} value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Penghasilan Perbulan Ayah</label>
                            <select name="penghasilan_ayah" id="" class="form-control" required>
                                <option value="">-- Pilih Penghasilan Wali --</option>
                                <option {{ old('penghasilan_ayah') == 'Kurang dari Rp 1.000.000' ? : 'selected' }} value="Kurang dari Rp 1.000.000" >Kurang dari Rp 1.000.000 </option>
                                <option {{ old('penghasilan_ayah') == 'Rp 1.000.000 - Rp 2.000.000' ? : 'selected' }} value="Rp 1.000.000 - Rp 2.000.000">Rp 1.000.000 - Rp 2.000.000 </option>
                                <option {{ old('penghasilan_ayah') == 'Lebih dari Rp 2.000.000' ? : 'selected' }} value="Lebih dari Rp 2.000.000">Lebih dari Rp 2.000.000 </option>
                                <option {{ old('penghasilan_ayah') == 'Kurang dari Rp. 500,000' ? : 'selected' }} value="Kurang dari Rp. 500,000">Kurang dari Rp. 500,000 </option>
                                <option {{ old('penghasilan_ayah') == 'Rp. 500,000 - Rp. 999,999' ? : 'selected' }} value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999 </option>
                                <option {{ old('penghasilan_ayah') == 'Rp. 1,000,000 - Rp. 1,999,999' ? : 'selected' }} value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999 </option>
                                <option {{ old('penghasilan_ayah') == 'Rp. 2,000,000 - Rp. 4,999,999' ? : 'selected' }} value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>
                                <option {{ old('penghasilan_ayah') == 'Rp. 5,000,000 - Rp. 20,000,000' ? : 'selected' }} value="Rp. 5,000,000 - Rp. 20,000,000">Rp. 5,000,000 - Rp. 20,000,000 </option>
                                <option {{ old('penghasilan_ayah') == 'Lebih dari Rp. 20,000,000' ? : 'selected' }} value="Lebih dari Rp. 20,000,000">Lebih dari Rp. 20,000,000 </option>
                                <option {{ old('penghasilan_ayah') == 'Tidak Berpenghasilan' ? : 'selected' }} value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                <option {{ old('penghasilan_ayah') == 'Lainnya' ? : 'selected' }} value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <p><i class="fas fa-user-astronaut"></i> Data Ibu Kandung</p>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Kandung Ibu</label>
                            <input type="text" name="nama_ibu" value="{{ old('nama_ibu') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Nama ibu kandung peserta didik sesuai dokumen
                            resmi yang berlaku</small><br>
                            <small class="text-danger">{{ $errors->first('nama_ibu') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">NIK Ibu</label>
                            <input type="text" name="nik_ibu" value="{{ old('nik_ibu') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Nomor Induk Kependudukan yang tercantum pada Kartu
                            Keluarga atau KTP ibu kandung</small>
                        </div>

                        <div class="form-group">
                            <label for="">Tahun Lahir Ibu</label>
                            <input type="date" name="tahun_lahir_ibu" value="{{ old('tahun_lahir_ibu') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Tahun Lahir Ibu Peserta Didik</small>
                        </div>

                        <div class="form-group">
                            <label>Pendidikan Terakhir Ibu</label>
                            <select name="pendidikan_terakhir_ibu" id="" class="form-control" required>
                                <option value="">Pilih pendidikan ibu</option>
                                <option {{ old('pendidikan_terakhir_ibu') == 'Tidak Sekolah' ? 'selected' : '' }} value="Tidak Sekolah">Tidak Sekolah</option>
                                <option {{ old('pendidikan_terakhir_ibu') == 'Putus SD' ? 'selected' : '' }} value="Putus SD">Putus SD</option>
                                <option {{ old('pendidikan_terakhir_ibu') == 'SD/Sederajat' ? 'selected' : '' }} value="SD/Sederajat">SD / Sederajat</option>
                                <option {{ old('pendidikan_terakhir_ibu') == 'SMP/Sederajat' ? 'selected' : '' }} value="SMP/Sederajat">SMP / Sederajat</option>
                                <option {{ old('pendidikan_terakhir_ibu') == 'SMA/Sederajat' ? 'selected' : '' }} value="SMA/Sederajat">SMA / Sederajat</option>
                                <option {{ old('pendidikan_terakhir_ibu') == 'D1' ? 'selected' : '' }} value="D1">D1</option>
                                <option {{ old('pendidikan_terakhir_ibu') == 'D2' ? 'selected' : '' }} value="D2">D2</option>
                                <option {{ old('pendidikan_terakhir_ibu') == 'D3' ? 'selected' : '' }} value="D3">D3</option>
                                <option {{ old('pendidikan_terakhir_ibu') == 'D4/S1' ? 'selected' : '' }} value="D4/S1">D4/S1</option>
                                <option {{ old('pendidikan_terakhir_ibu') == 'S2' ? 'selected' : '' }} value="S2">S2</option>
                                <option {{ old('pendidikan_terakhir_ibu') == 'S3' ? 'selected' : '' }} value="S3">S3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Pekerjaan Ibu</label>
                            <select name="pekerjaan_ibu" id="" class="form-control" required>
                                <option value="">-- Pilih Pekerjaan Ayah --</option>
                                <option {{ old('pekerjaan_ibu') == 'Tidak Bekerja' ? 'selected' : '' }} value="Tidak Bekerja">Tidak Bekerja</option>
                                <option {{ old('pekerjaan_ibu') == 'Nelayan' ? 'selected' : '' }} value="Nelayan">Nelayan</option>
                                <option {{ old('pekerjaan_ibu') == 'Petani' ? 'selected' : '' }} value="Petani">Petani</option>
                                <option {{ old('pekerjaan_ibu') == 'Peternak' ? 'selected' : '' }} value="Peternak">Peternak</option>
                                <option {{ old('pekerjaan_ibu') == 'PNS/TNI/Polri' ? 'selected' : '' }} value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                                <option {{ old('pekerjaan_ibu') == 'Karyawan Swasta' ? 'selected' : '' }} value="Karyawan Swasta">Karyawan Swasta</option>
                                <option {{ old('pekerjaan_ibu') == 'Pedagang Kecil' ? 'selected' : '' }} value="Pedagang Kecil">Pedagang Kecil</option>
                                <option {{ old('pekerjaan_ibu') == 'Pedagang Besar' ? 'selected' : '' }} value="Pedagang Besar">Pedagang Besar</option>
                                <option {{ old('pekerjaan_ibu') == 'Wiraswasta' ? 'selected' : '' }} value="Wiraswasta">Wiraswasta </option>
                                <option {{ old('pekerjaan_ibu') == 'Buruh' ? 'selected' : '' }} value="Buruh">Buruh</option>
                                <option {{ old('pekerjaan_ibu') == 'Pensiuanan' ? 'selected' : '' }} value="Pensiunan">Pensiunan</option>
                                <option {{ old('pekerjaan_ibu') == 'Tenaga Kerja Indonesia' ? 'selected' : '' }} value="Tenaga Kerja Indonesia">Tenaga Kerja Indonesia</option>
                                <option {{ old('pekerjaan_ibu') == 'Tidak dapat diterapkan' ? 'selected' : '' }} value="Tidak dapat diterapkan">Tidak dapat diterapkan</option>
                                <option {{ old('pekerjaan_ibu') == 'Sudah Meninggal' ? 'selected' : '' }} value="Sudah Meninggal">Sudah Meninggal</option>
                                <option {{ old('pekerjaan_ibu') == 'Lainnya' ? 'selected' : '' }} value="Lainnya">Lainnya</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Penghasilan Perbulan Ibu</label>
                            <select name="penghasilan_ibu" id="" class="form-control" required>
                                <option value="">-- Pilih Penghasilan Wali --</option>
                                <option {{ old('penghasilan_ibu') == 'Kurang dari Rp 1.000.000' ? : 'selected' }} value="Kurang dari Rp 1.000.000" >Kurang dari Rp 1.000.000 </option>
                                <option {{ old('penghasilan_ibu') == 'Rp 1.000.000 - Rp 2.000.000' ? : 'selected' }} value="Rp 1.000.000 - Rp 2.000.000">Rp 1.000.000 - Rp 2.000.000 </option>
                                <option {{ old('penghasilan_ibu') == 'Lebih dari Rp 2.000.000' ? : 'selected' }} value="Lebih dari Rp 2.000.000">Lebih dari Rp 2.000.000 </option>
                                <option {{ old('penghasilan_ibu') == 'Kurang dari Rp. 500,000' ? : 'selected' }} value="Kurang dari Rp. 500,000">Kurang dari Rp. 500,000 </option>
                                <option {{ old('penghasilan_ibu') == 'Rp. 500,000 - Rp. 999,999' ? : 'selected' }} value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999 </option>
                                <option {{ old('penghasilan_ibu') == 'Rp. 1,000,000 - Rp. 1,999,999' ? : 'selected' }} value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999 </option>
                                <option {{ old('penghasilan_ibu') == 'Rp. 2,000,000 - Rp. 4,999,999' ? : 'selected' }} value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>
                                <option {{ old('penghasilan_ibu') == 'Rp. 5,000,000 - Rp. 20,000,000' ? : 'selected' }} value="Rp. 5,000,000 - Rp. 20,000,000">Rp. 5,000,000 - Rp. 20,000,000 </option>
                                <option {{ old('penghasilan_ibu') == 'Lebih dari Rp. 20,000,000' ? : 'selected' }} value="Lebih dari Rp. 20,000,000">Lebih dari Rp. 20,000,000 </option>
                                <option {{ old('penghasilan_ibu') == 'Tidak Berpenghasilan' ? : 'selected' }} value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                <option {{ old('penghasilan_ibu') == 'Lainnya' ? : 'selected' }} value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <p> <i class="fa fa-users"></i> Data Wali</p>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Wali</label>
                            <input type="text" name="nama_wali" value="{{ old('nama_wali') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small class="text-danger">{{ $errors->first('nama_wali') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">NIK Wali</label>
                            <input type="text" name="nik_wali" value="{{ old('nik_wali') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Nomor Induk Kependudukan yang tercantum pada Kartu
                            Keluarga atau KTP Wali murid</small>
                        </div>

                        <div class="form-group">
                            <label for="">Tahun Lahir Wali</label>
                            <input type="date" name="tahun_lahir_wali" value="{{ old('tahun_lahir_wali') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Tahun Lahir Ibu Peserta Didik</small>
                        </div>

                        <div class="form-group">
                            <label>Pendidikan Terakhir Wali</label>
                            <select name="pendidikan_terakhir_wali" id="" class="form-control" required>
                                <option value="">-- Pilih Pendidikan Wali --</option>
                                <option {{ old('pendidikan_terakhir_wali') == 'Tidak Sekolah' ? 'selected' : '' }} value="Tidak Sekolah">Tidak Sekolah</option>
                                <option {{ old('pendidikan_terakhir_wali') == 'Putus SD' ? 'selected' : '' }} value="Putus SD">Putus SD</option>
                                <option {{ old('pendidikan_terakhir_wali') == 'SD/Sederajat' ? 'selected' : '' }} value="SD/Sederajat">SD / Sederajat</option>
                                <option {{ old('pendidikan_terakhir_wali') == 'SMP/Sederajat' ? 'selected' : '' }} value="SMP/Sederajat">SMP / Sederajat</option>
                                <option {{ old('pendidikan_terakhir_wali') == 'SMA/Sederajat' ? 'selected' : '' }} value="SMA/Sederajat">SMA / Sederajat</option>
                                <option {{ old('pendidikan_terakhir_wali') == 'D1' ? 'selected' : '' }} value="D1">D1</option>
                                <option {{ old('pendidikan_terakhir_wali') == 'D2' ? 'selected' : '' }} value="D2">D2</option>
                                <option {{ old('pendidikan_terakhir_wali') == 'D3' ? 'selected' : '' }} value="D3">D3</option>
                                <option {{ old('pendidikan_terakhir_wali') == 'D4/S1' ? 'selected' : '' }} value="D4/S1">D4/S1</option>
                                <option {{ old('pendidikan_terakhir_wali') == 'S2' ? 'selected' : '' }} value="S2">S2</option>
                                <option {{ old('pendidikan_terakhir_wali') == 'S3' ? 'selected' : '' }} value="S3">S3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Pekerjaan Wali</label>
                            <select name="pekerjaan_wali" id="" class="form-control" required>
                            <option value="">-- Pilih Pekerjaan Wali --</option>
                            <option {{ old('pekerjaan_wali') == 'Tidak Bekerja' ? 'selected' : '' }} value="Tidak Bekerja">Tidak Bekerja</option>
                            <option {{ old('pekerjaan_wali') == 'Nelayan' ? 'selected' : '' }} value="Nelayan">Nelayan</option>
                            <option {{ old('pekerjaan_wali') == 'Petani' ? 'selected' : '' }} value="Petani">Petani</option>
                            <option {{ old('pekerjaan_wali') == 'Peternak' ? 'selected' : '' }} value="Peternak">Peternak</option>
                            <option {{ old('pekerjaan_wali') == 'PNS/TNI/Polri' ? 'selected' : '' }} value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                            <option {{ old('pekerjaan_wali') == 'Karyawan Swasta' ? 'selected' : '' }} value="Karyawan Swasta">Karyawan Swasta</option>
                            <option {{ old('pekerjaan_wali') == 'Pedagang Kecil' ? 'selected' : '' }} value="Pedagang Kecil">Pedagang Kecil</option>
                            <option {{ old('pekerjaan_wali') == 'Pedagang Besar' ? 'selected' : '' }} value="Pedagang Besar">Pedagang Besar</option>
                            <option {{ old('pekerjaan_wali') == 'Wiraswasta' ? 'selected' : '' }} value="Wiraswasta">Wiraswasta </option>
                            <option {{ old('pekerjaan_wali') == 'Buruh' ? 'selected' : '' }} value="Buruh">Buruh</option>
                            <option {{ old('pekerjaan_wali') == 'Pensiuanan' ? 'selected' : '' }} value="Pensiunan">Pensiunan</option>
                            <option {{ old('pekerjaan_wali') == 'Tenaga Kerja Indonesia' ? 'selected' : '' }} value="Tenaga Kerja Indonesia">Tenaga Kerja Indonesia</option>
                            <option {{ old('pekerjaan_wali') == 'Tidak dapat diterapkan' ? 'selected' : '' }} value="Tidak dapat diterapkan">Tidak dapat diterapkan</option>
                            <option {{ old('pekerjaan_wali') == 'Sudah Meninggal' ? 'selected' : '' }} value="Sudah Meninggal">Sudah Meninggal</option>
                            <option {{ old('pekerjaan_wali') == 'Lainnya' ? 'selected' : '' }} value="Lainnya">Lainnya</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Penghasilan Perbulan Wali</label>
                            <select name="penghasilan_wali" id="" class="form-control" required>
                                <option value="">-- Pilih Penghasilan Wali --</option>
                                <option {{ old('penghasilan_wali') == 'Kurang dari Rp 1.000.000' ? 'selected' : '' }} value="Kurang dari Rp 1.000.000" >Kurang dari Rp 1.000.000 </option>
                                <option {{ old('penghasilan_wali') == 'Rp 1.000.000 - Rp 2.000.000' ? 'selected' : '' }} value="Rp 1.000.000 - Rp 2.000.000">Rp 1.000.000 - Rp 2.000.000 </option>
                                <option {{ old('penghasilan_wali') == 'Lebih dari Rp 2.000.000' ? 'selected' : '' }} value="Lebih dari Rp 2.000.000">Lebih dari Rp 2.000.000 </option>
                                <option {{ old('penghasilan_wali') == 'Kurang dari Rp. 500,000' ? 'selected' : '' }} value="Kurang dari Rp. 500,000">Kurang dari Rp. 500,000 </option>
                                <option {{ old('penghasilan_wali') == 'Rp. 500,000 - Rp. 999,999' ? 'selected' : '' }} value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999 </option>
                                <option {{ old('penghasilan_wali') == 'Rp. 1,000,000 - Rp. 1,999,999' ? 'selected' : '' }} value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999 </option>
                                <option {{ old('penghasilan_wali') == 'Rp. 2,000,000 - Rp. 4,999,999' ? 'selected' : '' }} value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>
                                <option {{ old('penghasilan_wali') == 'Rp. 5,000,000 - Rp. 20,000,000' ? 'selected' : '' }} value="Rp. 5,000,000 - Rp. 20,000,000">Rp. 5,000,000 - Rp. 20,000,000 </option>
                                <option {{ old('penghasilan_wali') == 'Lebih dari Rp. 20,000,000' ? 'selected' : '' }} value="Lebih dari Rp. 20,000,000">Lebih dari Rp. 20,000,000 </option>
                                <option {{ old('penghasilan_wali') == 'Tidak Berpenghasilan' ? 'selected' : '' }} value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                <option {{ old('penghasilan_wali') == 'Lainnya' ? 'selected' : '' }} value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <p> <i class="fa fa-address-book"></i> Kontak</p>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label for="">Nomor Telepon Rumah</label>
                            <input type="text" name="nomor_rumah" value="{{ old('nomor_rumah') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Pastikan nomor telepon tersebut aktif!</small><br>
                            <small class="text-danger">{{ $errors->first('nomor_rumah') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Nomor HP</label>
                            <input type="text" name="nomor_hp" value="{{ old('nomor_hp') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Pastikan nomor telepon tersebut aktif!</small>
                            <small class="text-danger">{{ $errors->first('nomor_hp') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" id="" class="form-control" aria-describedby="helpId" required>
                            <small class="text-danger">{{ $errors->first('email') }}</small>

                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="card">
                        <button type="submit" class="btn btn-primary form-control"><i class="fa fa-save mr-1"></i>DAFTAR</button>
                    </div>
                    </div>

                </div>
            </form>
        </div>

      </div>
    </div>



    <!-- General JS Scripts -->
    <script src="{{ url('/') }}/assets/modules/jquery.min.js"></script>
    <script src="{{ url('/') }}/assets/modules/popper.js"></script>
    <script src="{{ url('/') }}/assets/modules/tooltip.js"></script>
    <script src="{{ url('/') }}/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="{{ url('/') }}/assets/modules/moment.min.js"></script>
    <script src="{{ url('/') }}/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="{{ url('/') }}/assets/modules/sweetalert/sweetalert.min.js"></script>
    <!-- Plugins -->

    <!-- Page Specific JS File -->
    <script src="{{ url('/') }}/assets/js/page/modules-sweetalert.js"></script>
    <!-- Template JS File -->
    <script src="{{ url('/') }}/assets/js/scripts.js"></script>
    <script src="{{ url('/') }}/assets/js/custom.js"></script>

    <script>
        $(document).ready(function(){
            $('#kks').on('change', function(){
                if ($(this).val() == 'Tidak') {
                    $('#no_kks').attr('disabled', true);
                }else{
                    $('#no_kks').removeAttr('disabled');
                }
            })

            $('#pkh').on('change', function(){
                if ($(this).val() == 'Tidak') {
                    $('#no_pks').attr('disabled', true);
                }else{
                    $('#no_pks').removeAttr('disabled');
                }
            })

            $('#kip').on('change', function(){
                if ($(this).val() == 'Tidak') {
                    $('#no_kip').attr('disabled', true);
                }else{
                    $('#no_kip').removeAttr('disabled');
                }
            })
        })
    </script>
</body>

</html>
