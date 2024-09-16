@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="d-flex justify-content-end">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Arsip</li>
            </ol>
        </nav>
    </div>
    <div class="row page-title-header">

        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Data Arsip </h4>


            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end">

                        <a class="my-2 btn btn-sm btn-primary " href="{{ route('arsip.create') }}">Tambah</a>


                    </div>


                    <div class="table-responsive">
                        <table class="table dttable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Klasifikasi</th>
                                    <th>Nama Arsip</th>
                                    <th>Kategori</th>
                                    <th>Keterangan</th>
                                    <th>Pembuat</th>
                                    <th>Level</th>
                                    <th>Tanggal dibuat</th>


                                    <th>Detail Unduhan</th>
                                    <th class="text-center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($arsip as $u)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $u->kode }}</td>
                                        <td>{{ @$u->codearsip->name }}</td>
                                        <td>{{ $u->namaarsip }}</td>
                                        <td>{{ @$u->category->name }}</td>
                                        <td>{{ $u->keterangan }}</td>
                                        <td>{{ @$u->pembuat->name }} </td>
                                        <td>{{ @$u->pembuat->role }} </td>
                                        <td>{{ @$u->created_at }}</td>



                                        <td><a href="{{ route('arsip.detailunduhan', $u->id) }}"
                                                class="m-1 btn btn-sm btn-info"><i class="fa fa-info"></i> </a></td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                @if ($u->file != '')
                                                    <a href="{{ route('arsip.downloadFile', $u->id) }}"
                                                        class="m-1 btn btn-sm btn-primary"><i class="fa fa-download"></i>
                                                    </a>
                                                @endif
                                                <a href="{{ route('arsip.show', $u->id) }}"
                                                    class="m-1 btn btn-sm btn-default border"><i class="fa fa-eye"></i>
                                                </a>

                                                <a href="{{ route('arsip.edit', $u->id) }}"
                                                    class="m-1 btn btn-sm btn-warning">Edit</a>

                                                <a href="#" data-id="{{ $u->id }}"
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
    </div>
@endsection
@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function Download(url) {
            document.getElementById('my_iframe').src = url;
        };
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
                    let idx = $(this).data('id')
                    let url = '/arsip/' + idx;
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
