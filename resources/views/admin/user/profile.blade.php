@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Ganti Password

                </h4>


            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-md-8 offset-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">GantiPassword</h4>
                    <form class="forms-sample" enctype="multipart/form-data" method="post"
                        action="{{ route('user.profile.store', $profile->id) }}">
                        @csrf



                        <div class="form-group">
                            <label for="kode">password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="password" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">silahkan masukan foto</label>

                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>


                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <a href="{{ route('dashboard.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
