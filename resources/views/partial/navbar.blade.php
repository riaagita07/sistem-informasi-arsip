<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <div class="d-block">
            <h3 class='text-white'>Arsip</h3>
            <a class="navbar-brand brand-logo" style="width: 200px;" href="/">
                <img src="/Logoo.jpg" alt="Logo" /> </a>
            <a class="navbar-brand brand-logo-mini" href="/">
                <img src="/Logo.jpg" alt="Logoo" /> </a>
        </div>


    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">

        <ul class="navbar-nav ml-auto">

            <h4>Level Akses : {{ auth()->user()->role }}</h4>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false">
                    <img class="img-xs rounded-circle"
                        src="@if (auth()->user()->foto) {{ Storage::url(auth()->user()->foto) }}
                    @else
                    /staradmin/src/assets/images/faces/face8.jpg @endif"
                        alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle"
                            src="@if (auth()->user()->foto) {{ Storage::url(auth()->user()->foto) }}
                        @else
                        /staradmin/src/assets/images/faces/face8.jpg @endif"
                            alt="Profile image">
                        <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->name }}</p>
                        <p class="font-weight-light text-muted mb-0">{{ auth()->user()->email }}</p>
                    </div>
                    <a href="{{ route('user.profile') }}" class="dropdown-item">Ganti Password </a>

                    <a href="{{ route('login.logout') }}" class="dropdown-item">Log Out<i
                            class="dropdown-item-icon ti-power-off"></i></a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
