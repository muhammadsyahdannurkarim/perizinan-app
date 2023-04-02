<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')Aplikasi Perizinan PeTIK Jombang</title>
    @include('Layouts.head')
</head>

<body>
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Aplikasi Perizinan<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    @yield('navbar')
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->
    <!-- Navbar -->
    @include('Layouts.navbar')
    
    {{-- Container --}}
    @yield('container')

    {{-- Footer --}}
    @include('Layouts.footer')

    <!-- REQUIRED SCRIPTS -->
    @include('Layouts.script')
</body>

</html>

