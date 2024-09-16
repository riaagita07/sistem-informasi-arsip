<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Arsip</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/staradmin/src/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/staradmin/src/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="/staradmin/src/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/staradmin/src/assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/staradmin/src/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/staradmin/src/assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/staradmin/src/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/staradmin/src/assets/css/demo_1/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="/staradmin/src/assets/images/favicon.ico" />
    <style>
        .sidebar {
            background: linear-gradient(to top, #ff00b5, #dd129e);
        }

        .navbar.default-layout .navbar-brand-wrapper {
            background: #dc1a90;
        }
    </style>
    @stack('styles')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('partial/navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('partial/sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('partial/footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/staradmin/src/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/staradmin/src/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/staradmin/src/assets/js/shared/off-canvas.js"></script>
    <script src="/staradmin/src/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/staradmin/src/assets/js/demo_1/dashboard.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.all.min.js"></script>
    <!-- End custom js for this page-->
    <script>
        $(document).ready(function() {
            $('.dttable').DataTable();
        });
    </script>
    @stack('scripts')
</body>

</html>
