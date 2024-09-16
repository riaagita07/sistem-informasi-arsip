@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Data Kategori</a></li>
                <li class="breadcrumb-item active" aria-current="page">EditKategori</li>
            </ol>
        </nav>
    </div>
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Edit Kategori

                </h4>


            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-md-8 offset-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Kategori</h4>
                    <form class="forms-sample" method="post" action="{{ route('category.update', $category->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nama Kategori</label>
                            <input type="text" class="form-control" value="{{ $category->name }}" id="name"
                                name="name" placeholder="Nama Kategori" required>
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <a href="{{ route('category.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
