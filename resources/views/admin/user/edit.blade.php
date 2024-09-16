@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('user.index') }}">DataUser</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edituser</li>
            </ol>
        </nav>
    </div>
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Edit User

                </h4>


            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-md-8 offset-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form User</h4>
                    <form class="forms-sample" enctype="multipart/form-data" method="post"
                        action="{{ route('user.update', $user->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="kode">email</label>
                            <input type="text" value="{{ $user->email }}" class="form-control" id="email"
                                name="email" placeholder="name" required>
                        </div>

                        <div class="form-group">
                            <label for="kode">NAMA</label>
                            <input type="text" value="{{ $user->name }}" class="form-control" id="name"
                                name="name" placeholder="name" required>
                        </div>


                        <div class="form-group">
                            <label for="role">pilih type</label>
                            <select class="form-control" required name="role" id="role">
                                <option value="admin">admin</option>
                                <option value="petugas" @if ($user->role == 'petugas') selected @endif>petugas</option>
                                <option value="user" @if ($user->role == 'user') selected @endif>user</option>

                            </select>

                        </div>
                        <div class="form-group">
                            <label for="keterangan">pilih pegawai</label>
                            <select class="form-control" name="pegawai_id" id="pegawai_id">
                                <option value="">Pilih</option>
                                @foreach ($pegawais as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama }} - {{ $p->nip }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="category_id">silahkan masukan foto</label>

                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>


                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <a href="{{ route('user.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('#pegawai_id').val(`{{ $user->pegawai_id }}`)
    </script>
@endpush
