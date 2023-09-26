<div>
    {{-- In work, do what you enjoy. --}}
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assetsWebsite/img/logo.png') }}" alt="">
                <h1>Append</h1>
                <span>.</span>
            </a>

            <!-- Nav Menu -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('team') }}">Team</a></li>
                    {{-- <li><a href="blog.html">Blog</a></li> --}}
                    {{-- <li class="dropdown has-dropdown"><a href="#"><span>Dropdown</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul class="dd-box-shadow">
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown has-dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul class="dd-box-shadow">
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{ route('contact') }}">Contact</a></li>

                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <!-- End Nav Menu -->

            {{-- <a class="btn-getstarted" href="index.html#about">Get Started</a> --}}
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        @if (auth()->user()->hasRole('admin'))
                            <a href="{{ route('admin.dashboard') }}" class="btn-getstarted">Admin Dashboard</a>
                        @else
                            <a href="{{ route('profile.edit') }}" class="btn-getstarted">Profile</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="btn-getstarted">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-getstarted">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div>
    </header>
</div>
