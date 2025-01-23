<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

    <script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta3/dist/js/adminlte.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta3/dist/css/adminlte.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/adminlte-rtl@2.4.2/Gruntfile.min.js"></script>
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
    integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
    crossorigin="anonymous"
  />
  <!--end::Fonts-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
    integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
    crossorigin="anonymous"
  />
  <!--end::Third Party Plugin(OverlayScrollbars)-->
  <!--begin::Third Party Plugin(Bootstrap Icons)-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
    crossorigin="anonymous"
  />
  <!--end::Third Party Plugin(Bootstrap Icons)-->
  <!--begin::Required Plugin(AdminLTE)-->
  <link rel="stylesheet" href="../../dist/css/adminlte.css" />
  <!--end::Required Plugin(AdminLTE)-->
  <!-- apexcharts -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
    integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
    crossorigin="anonymous"
  />
  <!-- jsvectormap -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
    integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
    crossorigin="anonymous"
  />

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Bootbox.js depuis le CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js"></script>

    <!-- Bootbox.js depuis le CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js"></script>
    <!-- Inclure Bootstrap JS (à la fin du fichier body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div id="app">
        <div class="app-wrapper">
            <!--begin::Header-->
            <nav class="app-header navbar navbar-expand bg-body">
              <!--begin::Container-->
              <div class="container-fluid">
                <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                      <i class="bi bi-list"></i>
                    </a>
                  </li>
       
                </ul>
                <!--end::Start Navbar Links-->
                <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto">
                  <!--begin::Navbar Search-->
                  <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                      <i class="bi bi-search"></i>
                    </a>
                  </li>
                  <!--end::Navbar Search-->
                  <!--begin::Messages Dropdown Menu-->
                  <li class="nav-item dropdown">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">
                      <i class="bi bi-chat-text"></i>
                      <span class="navbar-badge badge text-bg-danger">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                      <a href="#" class="dropdown-item">
                        <!--begin::Message-->
                        <div class="d-flex">
                          <div class="flex-shrink-0">
                            <img
                              src="../../../dist/assets/img/user1-128x128.jpg"
                              alt="User Avatar"
                              class="img-size-50 rounded-circle me-3"
                            />
                          </div>
                    </div>
                  </li>
                  <!--end::Messages Dropdown Menu-->
                  <!--begin::Notifications Dropdown Menu-->
                
                  <!--end::Notifications Dropdown Menu-->
                  <!--begin::Fullscreen Toggle-->
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                      <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                      <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                    </a>
                  </li>
                  <!--end::Fullscreen Toggle-->
                  <!--begin::User Menu Dropdown-->
                  <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                      <img
                        src="../../../dist/assets/img/user2-160x160.jpg"
                        class="user-image rounded-circle shadow"
                        alt="User Image"
                      />
                      <span class="d-none d-md-inline">    {{ auth()->user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                      <!--begin::User Image-->
                      <li class="user-header text-bg-primary">
                        <img
                          src="../../../dist/assets/img/user2-160x160.jpg"
                          class="rounded-circle shadow"
                          alt="User Image"
                        />
                        <p>
                          {{ auth()->user()->name}}
                          <small>Member since Nov. 2023</small>
                        </p>
                      </li>
                      <!--end::User Image-->
                      <!--begin::Menu Body-->
                      <li class="user-body">
                        <!--begin::Row-->
                        
                        <!--end::Row-->
                      </li>
                      <!--end::Menu Body-->
                      <!--begin::Menu Footer-->
                      <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                     
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-default btn-flat float-end">Sign out</button>
                        </form>
                    
                      </li>
                      <!--end::Menu Footer-->
                    </ul>
                  </li>
                  <!--end::User Menu Dropdown-->
                </ul>
                <!--end::End Navbar Links-->
              </div>
              <!--end::Container-->
            </nav>
            <!--end::Header-->
            <!--begin::Sidebar-->
            <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
              <!--begin::Sidebar Brand-->
              <div class="sidebar-brand">
                <!--begin::Brand Link-->
                <a href="../index.html" class="brand-link">
                  <!--begin::Brand Image-->
                  {{-- <img
                    src="../../../dist/assets/img/AdminLTELogo.png"
                    alt="AdminLTE Logo"
                    class="brand-image opacity-75 shadow"
                  />
                  <!--end::Brand Image--> --}}
                  <!--begin::Brand Text-->
                  <span class="brand-text fw-light">e-commerce</span>
                  <!--end::Brand Text-->
                </a>
                <!--end::Brand Link-->
              </div>
              <!--end::Sidebar Brand-->
              <!--begin::Sidebar Wrapper-->
              <div class="sidebar-wrapper">
                <nav class="mt-2">
                  <!--begin::Sidebar Menu-->
                  <ul
                    class="nav sidebar-menu flex-column"
                    data-lte-toggle="treeview"
                    role="menu"
                    data-accordion="false"
                  >
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                          Dashboard
                          <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('products.create')}}" class="nav-link">
                          <i class="nav-icon bi bi-palette"></i>
                          <p>Create Product</p>
                        </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('products.index')}}" class="nav-link">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>Products</p>
                      </a>
                  </li>                    
                  </ul>
                  <!--end::Sidebar Menu-->
                </nav>
              </div>
              <!--end::Sidebar Wrapper-->
            </aside>
            <!--end::Sidebar-->
            <!--begin::App Main-->
            <main class="py-4">
                @yield('content')
            </main>
            <!--end::App Main-->
            <!--begin::Footer-->
            <footer class="app-footer">
              <!--begin::To the end-->
              <div class="float-end d-none d-sm-inline">Anything you want</div>
              <!--end::To the end-->
              <!--begin::Copyright-->
              <strong>
                Copyright &copy; 2014-2024&nbsp;
                <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
              </strong>
              All rights reserved.
              <!--end::Copyright-->
            </footer>
            <!--end::Footer-->
          </div>
       

       
    </div>
</body>
</html>