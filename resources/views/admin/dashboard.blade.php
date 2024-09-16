@extends('layout/app')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>

            </div>
        </div>

    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @if (auth()->user()->role != 'user')
                            <div class="col-lg-4 col-md-6">
                                <div class="grid-margin stretch-card average-price-card">
                                    <div class="card text-white">


                                        <div class="card-body">
                                            <div class="d-flex justify-content-between pb-2 align-items-center">

                                                <h2 class="font-weight-semibold mb-0">-</h2>
                                                <a class="text-white nav-link dropdown-toggle" id="MasterDropdown"
                                                    href="#" data-toggle="dropdown" aria-expanded="false">
                                                </a>
                                                <div class="dropdown-menu navbar-dropdown" aria-labelledby="MasterDropdown">
                                                    @if (auth()->user()->role != 'petugas' && auth()->user()->role != 'user')
                                                        <a href="{{ route('user.index') }}" class="dropdown-item">Data
                                                            User<i class="dropdown-item-icon ti-dashboard"></i></a>

                                                        <a href="{{ route('pegawai.index') }}" class="dropdown-item">Data
                                                            Pegawai<i class="dropdown-item-icon ti-comment-alt"></i></a>
                                                    @endif

                                                    @if (auth()->user()->role != 'user')
                                                        <a href="{{ route('category.index') }}" class="dropdown-item">Data
                                                            Kategori<i class="dropdown-item-icon ti-comment-alt"></i></a>
                                                        <a href="{{ route('codearsip.index') }}" class="dropdown-item">Data
                                                            Kode Arsip<i class="dropdown-item-icon ti-comment-alt"></i></a>
                                                    @endif

                                                </div>



                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="font-weight-semibold mb-0">Master Data</h5>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col-lg-4 col-md-6">
                            <div class="grid-margin stretch-card average-price-card">
                                <div class="card text-white">


                                    <div class="card-body" style="background: #ae4b8e !important;">
                                        <div class="d-flex justify-content-between pb-2 align-items-center">

                                            <h2 class="font-weight-semibold mb-0">-</h2>
                                            <a class="text-white nav-link dropdown-toggle" id="MasterDropdown"
                                                href="#" data-toggle="dropdown" aria-expanded="false">
                                            </a>
                                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="MasterDropdown">

                                                <a href="{{ route('arsip.index') }}" class="dropdown-item">Data Arsip<i
                                                        class="dropdown-item-icon ti-comment-alt"></i></a>

                                            </div>



                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h5 class="font-weight-semibold mb-0">Data Transaksi</h5>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        @if (auth()->user()->role != 'petugas' && auth()->user()->role != 'user')
                            <div class="col-lg-4 col-md-6">
                                <div class="grid-margin stretch-card average-price-card">
                                    <div class="card text-white" style="background: #0f550a !important;">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between pb-2 align-items-center">
                                                <h2 class="font-weight-semibold mb-0">2</h2>
                                                <a class="nav-link dropdown-toggle text-white" id="ArsipDropdown"
                                                    href="#" data-toggle="dropdown" aria-expanded="false">
                                                </a>
                                                <div class="dropdown-menu navbar-dropdown" aria-labelledby="ArsipDropdown">

                                                    <a href="/arsip?ago=7day&setup=nofilter" class="dropdown-item">7 hari yg
                                                        lalu<i class="dropdown-item-icon ti-dashboard"></i></a>
                                                    <a href="/arsip?ago=lastmonth&setup=nofilter"
                                                        class="dropdown-item">Bulan
                                                        lalu<i class="dropdown-item-icon ti-comment-alt"></i></a>
                                                    <a href="/arsip?ago=lastyear&setup=nofilter" class="dropdown-item">Tahun
                                                        lalu<i class="dropdown-item-icon ti-comment-alt"></i></a>

                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="font-weight-semibold mb-0">Laporan Arsip</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="grid-margin stretch-card average-price-card">
                                    <div class="card text-white" style="background: #f65d5d !important;">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between pb-2 align-items-center">
                                                <h2 class="font-weight-semibold mb-0">{{ $totalPengunduh }}</h2>
                                                <div class="icon-holder">
                                                    <i class="fa fa-cloud-download"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="font-weight-semibold mb-0">Jumlah Pengunduh</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
