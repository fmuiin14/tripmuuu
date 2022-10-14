<!-- navbar start -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ url('frontend/images/logo.png') }}" class="img-fluid" alt="logo">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link active">Beranda</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#popular" class="nav-link">Paket Travel</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Jasa Visa</a>
                        <a href="#" class="dropdown-item">Bulan Madu</a>
                        <a href="#" class="dropdown-item">Liburan Privat Keluarga</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#testimonialHeading" class="nav-link">Kata Mereka</a>
                </li>
            </ul>

            @guest
                <!-- mobile button start -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0" type="button"
                        onclick="event.preventDefault(); location.href='{{ url('login') }}';">Masuk</button>
                </form>
                <!-- mobile button end -->

                <!-- desktop button start -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                        onclick="event.preventDefault(); location.href='{{ url('login') }}';">Masuk</button>
                </form>
                <!-- desktop button end -->
            @endguest

            @auth
                <!-- mobile button start -->
                <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">Keluar</button>
                </form>
                <!-- mobile button end -->

                <!-- desktop button start -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">Keluar</button>
                </form>
                <!-- desktop button end -->
            @endauth

        </div>

    </nav>
</div>
<!-- navbar end -->
