@include('dashboard.layouts.header')
<body>
    <div class="dashboard-main">
   @include('dashboard.layouts.sidebar')
        <div class="main-right">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                <a class="navbar-toggler d-block" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                  <span></span>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <button class="nav-link logout">Logout</button>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            @yield('content')
        </div>
    </div>
</body>
@include('dashboard.layouts.footer')
