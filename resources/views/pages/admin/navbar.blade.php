<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">
    
      <a href="index.html" class="logo d-flex align-items-center me-auto">
          <img src="{{ asset('images/logoFix.png') }}" alt="logo brand" class="img-fluid">
          {{-- <h1 class="sitename">Logis</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
          <a href="{{ route('award.index')}}" class="btn btn-primary btn-sm"
             style="padding: 0.25rem 0.75rem; font-size: 0.875rem; border-radius: 0.25rem;">Back to Award Client</a>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

  </div>
</header>
