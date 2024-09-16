@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Laporan Arsip</li>
            </ol>
        </nav>
    </div>
    <div class="row page-title-header">

        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Data Arsip </h4>


            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        @if (!@request()->query('ago'))
                            @if (auth()->user()->role != 'user')
                                <a class="my-2 btn btn-sm btn-primary " href="{{ route('arsip.create') }}">Tambah</a>
                            @endif
                        @endif

                    </div>
                    @if (!request()->query('setup'))
                        <div class="form-inline">
                            <a href="?ago=7day" class="btn btn-primary mb-2 m-1">7 Hari yang lalu</a>
                            <a href="?ago=lastmonth" class="btn btn-secondary mb-2 m-1">Bulan lalu</a>
                            <a href="?ago=lastyear" class="btn btn-warning mb-2 m-1">Tahun lalu</a>
                            <a href="{{ url()->current() }}" class="btn btn-danger mb-2 m-1">Reset</a>
                        </div>
                    @endif
                    @if (request()->query('setup'))
                        <a href="{{ route('arsip.downloadexcel') }}?ago={{ request()->query('ago') }}" target="_blank"
                            class="btn btn-success my-2">Download Excel</a>
                        <a href="{{ route('arsip.downloadword') }}?ago={{ request()->query('ago') }}" target="_blank"
                            class="btn btn-primary my-2">Download Word</a>
                    @endif
                    <div class="table-responsive">
                        <table class="table dttable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Klasifikasi</th>
                                    <th>Nama Arsip</th>
                                    <th>Kategori</th>
                                    <th>Keterangan</th>
                                    <th>Pembuat</th>
                                    <th>Level</th>
                                    <th>Tanggal dibuat</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($arsip as $u)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $u->kode }}</td>
                                        <td>{{ @$u->codearsip->name }}</td>
                                        <td>{{ $u->namaarsip }}</td>
                                        <td>{{ @$u->category->name }}</td>
                                        <td>{{ $u->keterangan }}</td>
                                        <td>{{ @$u->pembuat->name }} </td>
                                        <td>{{ @$u->pembuat->role }} </td>
                                        <td>{{ @$u->created_at }}</td>





                                    </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
