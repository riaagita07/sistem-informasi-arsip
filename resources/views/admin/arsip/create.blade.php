@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('arsip.index') }}">Arsip</a></li>
                <li class="breadcrumb-item active" aria-current="page">TambahArsip</li>
            </ol>
        </nav>
    </div>
    <div class="row page-title-header">

        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Create Arsip

                </h4>


            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-md-8 offset-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Arsip</h4>
                    <form class="forms-sample" method="post" action="{{ route('arsip.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="klasifikasi">Klasifikasi</label>
                            <input type="text" class="form-control" id="klasifikasi" name="klasifikasi"
                                placeholder="Klasifikasi" readonly>
                        </div>
                        <div class="form-group">
                            <label for="namaarsip">nama arsip</label>
                            <input type="text" class="form-control" id="namaarsip" name="namaarsip"
                                placeholder="nama arsip" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Kategori</label>
                            <select class="form-control" required name="category_id" id="category_id">
                                <option value="">Pilih</option>
                                @foreach ($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                placeholder="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" class="form-control" id="file" name="file">
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <a href="{{ route('arsip.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).on('keypress', '#kode', function(e) {
            let val = $(this).val();
            if (e.which == 13) {
                $.get(`{{ route('arsip.getklasifikasi') }}?val=${val}`, function(data) {
                    $('#klasifikasi').val(data);
                })
                return false;
            }
        });
    </script>
@endpush
