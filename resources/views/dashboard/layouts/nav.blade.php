<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logooo.jpg" />
  <link rel="stylesheet"    href="{{ asset('assets/css/styles.min.css')}}" />
</head>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
    <!----------------------------------------------- Sidebar ----------------------------------------------->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a class="navbar-brand" href="index.html"><img src="../assets/images/logos/logooo.jpg" alt="" style="margin: -85px;"></a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ asset('/homeAdmin') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">PAGES</span>
            </li>
            
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ asset('/discount') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-cup"></i>
                </span>
                <span class="hide-menu">Discounts</span>
              </a>
            </li> 

            <li class="sidebar-item">
              <a href="{{ asset('/category') }}" class="sidebar-link"  aria-expanded="false">
                <span>
                  <i class="ti ti-category"></i>
                </span>
                
                <span class="hide-menu">Categories</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="{{ asset('/item') }}"class="sidebar-link"  aria-expanded="false">
                <span>
                  <i class="ti ti-shopping-cart"></i>
                </span>
                <span class="hide-menu">Products</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="{{ asset('/user') }}" class="sidebar-link" aria-expanded="false">
                <span>
                  <i class="ti ti-users"></i>
                </span>
                <span class="hide-menu">Users</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="{{ asset('/order') }}" class="sidebar-link"  aria-expanded="false">
                <span>
                  <i class="ti ti-list"></i>
                </span>
                <span class="hide-menu">Orders</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="{{ asset('/admin') }}" class="sidebar-link"  aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Admins</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a href="{{ asset('/review') }}" class="sidebar-link"  aria-expanded="false">
                <span>
                  <i class="ti ti-messages"></i>
                </span>
                <span class="hide-menu">Reviews</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ asset('/contact') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-message-2"></i>
                </span>
                <span class="hide-menu">Contact</span>
              </a>
            </li>            
          </ul>


        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside> 
    <!--////////////////////////////////////////// END Of Sidebar //////////////////////////////////////////-->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!----------------------------------------------- Header ----------------------------------------------->
      <header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff; padding: 10px;">

        <!-- Toggle button for small screens -->
        <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>
        </ul>

        <!-- "Log out" button aligned to the right -->
        <div style="margin-left: auto;">
            @if (session('loginname'))
                <a href="{{ route('adminLogout') }}">
                    <button type="submit" class="btn btn-warning" style="width: 150px;">Log out</button>
                </a>
            @endif
        </div>

    </nav>
</header>



      
          {{-- <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/rama.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{ asset('/profile') }}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>                   
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div> --}}