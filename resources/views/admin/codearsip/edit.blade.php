@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('codearsip.index') }}">Data KodeArsip</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit KodeArsip</li>
            </ol>
        </nav>
    </div>
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Edit Kode Arsip

                </h4>


            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-md-8 offset-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Kode Arsip</h4>
                    <form class="forms-sample" method="post" action="{{ route('codearsip.update', $codearsip->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="code">Kode</label>
                            <input type="text" class="form-control" value="{{ $codearsip->code }}" id="code"
                                name="code" placeholder="Kode" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Klasifikasi</label>
                            <input type="text" class="form-control" value="{{ $codearsip->name }}" id="name"
                                name="name" placeholder="Nama Klasisifkasi" required>
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <a href="{{ route('codearsip.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
