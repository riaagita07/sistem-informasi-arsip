@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">user</li>
            </ol>
        </nav>
    </div>

    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Data User</h4>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a class="my-2 btn btn-sm btn-primary " href="{{ route('user.create') }}">Tambah</a>
                    </div>
                    <table class="table dttable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Level Akses</th>
                                <th>Date Created</th>
                                <th>Pegawai</th>
                                <th>Foto</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $u)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->role }}</td>
                                    <td>{{ $u->created_at }}</td>
                                    <td>{{ @$u->pegawai->nama }} - {{ @$u->pegawai->nip }}</td>
                                    <td><img class="image" src="{{ Storage::url($u->foto) }}" width="160"></td>
                                    <td>
                                        <a href="{{ route('user.edit', $u->id) }}"
                                            class="m-1 btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ route('user.destroy', $u->id) }}" data-id="{{ $u->id }}"
                                            class="m-1 btn btn-sm btn-danger btnswal">Hapus</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '.btnswal', function(e) {
            e.preventDefault()
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let url = $(this).attr('href');
                    console.log(url)
                    $.ajax({
                        url: url,
                        method: 'DELETE',
                        success: function() {
                            console.log('DELETED');
                            location.reload()
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    })
                }
            })
        })
    </script>
@endpush
