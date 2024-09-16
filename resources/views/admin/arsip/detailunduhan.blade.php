@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Arsip</li>
                <li class="breadcrumb-item active" aria-current="page">Detail Unduhan</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Arsip</h4>
                    <div class="form-sample">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Arsip</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $arsip->namaarsip }}" class="form-control"
                                            readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $arsip->category->name }}" class="form-control"
                                            readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $arsip->keterangan }}" class="form-control"
                                            readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">File</label>
                                    <div class="col-sm-9">
                                        <a href="{{ route('arsip.show', $arsip->id) }}"
                                            class="m-1 btn btn-sm btn-default border"><i class="fa fa-eye"></i> View
                                            File</a>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row page-title-header">

                            <div class="col-12">
                                <div class="page-header">
                                    <h4 class="page-title">Data Download Arsip </h4>


                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">


                                        <table class="table dttable">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Tgl Download</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($arsip->pengunduh as $u)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $u->user->name }}</td>
                                                        <td>{{ $u->created_at }}</td>

                                                    </tr>
                                                @endforeach



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endsection
