@extends('layout/app')
@section('content')
    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pegawai.index') }}">data pegawai</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data Pegawai</li>
            </ol>
        </nav>
    </div>
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Create Pegawai

                </h4>


            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-md-8 offset-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Pegawai</h4>
                    <form class="forms-sample" method="post" action="{{ route('pegawai.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="kode">Nipbaru</label>
                            <input type="text" class="form-control" id="nip_baru" name="nip_baru" placeholder="nipbaru"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="klasifikasi">Nip</label>
                            <input type="text" class="form-control" id="nip" name="nip" placeholder="nip">
                        </div>
                        <div class="form-group">
                            <label for="namaarsip">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="namaarsip">Gelar</label>
                            <input type="text" class="form-control" id="gelar" name="gelar" placeholder="gelar"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="namaarsip">Tanggal lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                placeholder="tgl_lahir" required>
                        </div>

                        <div class="form-group">
                            <label for="namaarsip">Tempat lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                placeholder="tempat_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="namaarsip">kd_kelamin</label>
                            <select name="kd_kelamin" id="kd_kelamin" class="form-control">
                                <option value="L">Lakilaki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="namaarsip">kd_agama</label>
                            <input type="number" max="9" min="1" class="form-control" id="kd_agama"
                                name="kd_agama" placeholder="kd_agama" required>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <a href="{{ route('pegawai.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
