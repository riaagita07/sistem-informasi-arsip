@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">CodeArsip</li>
            </ol>
        </nav>
    </div>
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Data Kode Arsip

                </h4>


            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-sm btn-primary " href="{{ route('codearsip.create') }}">Tambah</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Klasifikasi</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($codearsip as $u)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $u->code }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('codearsip.edit', $u->id) }}"
                                                class="m-1 btn btn-sm btn-warning">Edit</a>

                                            <a href="{{ route('codearsip.destroy', $u->id) }}" data-id="{{ $u->id }}"
                                                class="m-1 btn btn-sm btn-danger btnswal">Hapus</a>
                                        </div>

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
