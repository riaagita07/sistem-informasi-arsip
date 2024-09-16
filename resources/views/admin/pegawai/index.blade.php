@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
            </ol>
        </nav>
    </div>
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Data pegawai</h4>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a class="my-2 btn btn-sm btn-primary " href="{{ route('pegawai.create') }}">Tambah</a>
                    </div>
                    <table class="table dttable">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nipbaru</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Gelar</th>
                                <th>Tanggallahir</th>
                                <th>Tempatlahir</th>
                                <th>jenis kelamin</th>
                                <th>agama</th>
                                <th>Opsi</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawais as $u)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $u->nip_baru }}</td>
                                    <td>{{ $u->nip }}</td>
                                    <td>{{ $u->nama }}</td>
                                    <td>{{ $u->gelar }}</td>
                                    <td>{{ $u->tgl_lahir }}</td>
                                    <td>{{ $u->tempat_lahitr }}</td>
                                    <td>{{ $u->kd_kelamin }}</td>
                                    <td>{{ $u->kd_agama }}</td>
                                    <td>
                                        <a href="{{ route('pegawai.edit', $u->id) }}"
                                            class="m-1 btn btn-sm btn-warning">Edit</a>

                                        <a href="{{ route('pegawai.destroy', $u->id) }}" data-id="{{ $u->id }}"
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
