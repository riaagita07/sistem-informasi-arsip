@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->

    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Datakategori</a></li>
                <li class="breadcrumb-item active" aria-current="page">TambahKategori</li>
            </ol>
        </nav>
    </div>

    <div class="row">

        <div class="col-md-8 offset-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Kategori</h4>
                    <form class="forms-sample" method="post" action="{{ route('category.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Kategori</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Nama Kategori" required>
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <a href="{{ route('category.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
