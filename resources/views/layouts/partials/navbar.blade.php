<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      
        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('images/logoFix.png') }}" alt="logo brand" class="img-fluid">
            {{-- <h1 class="sitename">Logis</h1> --}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home<br></a></li>
                <li><a href="{{ route('award.index')}}" class="{{ Route::currentRouteNamed('award.index') ? 'active' : '' }}">Award</a></li>
                <li><a href="{{ route('why-choose-us')}}" class="{{ Route::currentRouteNamed('why-choose-us') ? 'active' : '' }}">Why Choose Us</a></li>
                <li><a href="{{ route('contact') }}" class="{{ Route::currentRouteNamed('contact') ? 'active' : '' }}">Contact</a></li>

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>


    </div>
</header>
