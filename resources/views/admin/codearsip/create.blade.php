@extends('layout/app')
@section('content')
    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('codearsip.index') }}">datakodearsip</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambahkodearsip</li>
            </ol>
        </nav>
    </div>
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">

        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Create Kode Arsip

                </h4>


            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-md-8 offset-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Kode Arsip</h4>
                    <form class="forms-sample" method="post" action="{{ route('codearsip.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="code">Kode</label>
                            <input type="text" class="form-control" id="code" name="code" placeholder="Kode"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="name">Klasifikasi</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Klasifikasi" required>
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <a href="{{ route('codearsip.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
