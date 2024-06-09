<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    .main-sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 250px;
      background-color: #343a40;
      transition: width 0.3s;
      overflow: hidden;
    }

    .main-sidebar:hover {
      width: 300px;
    }

    .main-sidebar .brand-link {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 60px;
      padding: 0 1rem;
    }

    .main-sidebar .brand-link img {
      width: 100%;
      max-width: 120px;
      transition: opacity 0.3s;
    }

    .main-sidebar .sidebar {
      padding-top: 10px;
    }

    .main-sidebar .form-inline {
      padding: 10px;
    }

    .main-sidebar .form-inline .form-control-sidebar {
      width: calc(100% - 40px);
      transition: width 0.3s;
    }

    .main-sidebar:hover .form-inline .form-control-sidebar {
      width: calc(100% - 70px);
    }

    .main-sidebar .nav-sidebar .nav-item {
      position: relative;
    }

    .main-sidebar .nav-sidebar .nav-item .nav-link {
      color: #c2c7d0;
      padding: 10px 15px;
      transition: background-color 0.3s, color 0.3s;
    }

    .main-sidebar .nav-sidebar .nav-item:hover .nav-link {
      background-color: #495057;
      color: #ffffff;
    }

    .main-sidebar .nav-sidebar .nav-item .nav-icon {
      margin-right: 10px;
    }

    .main-sidebar .nav-sidebar .nav-item .nav-treeview {
      display: none;
      padding-left: 20px;
    }

    .main-sidebar .nav-sidebar .nav-item.menu-open .nav-treeview {
      display: block;
    }

    .main-sidebar .nav-sidebar .nav-item .nav-treeview .nav-item .nav-link {
      padding-left: 35px;
    }
  </style>
</head>

<body>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('lte/dist/img/LogoSmartdss.png')}}" alt="Dss logo" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li
            class="nav-item has-treeview {{ request()->is('rekomendasiopds*') || request()->is('permintaans*') || request()->is('https://kajian.jogjakota.go.id/Add') ? 'menu-open' : '' }}">
            <a href="#"
              class="nav-link {{ request()->is('rekomendasiopds*') || request()->is('permintaans*') || request()->is('https://kajian.jogjakota.go.id/Add') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kajian
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('kajians.index') }}" class="nav-link {{ request()->is('kajians*') ? 'active' : '' }}">
                  <i class="far fa-file-alt nav-icon"></i>
                  <p>Kajian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('rekomendasiopds.index') }}"
                  class="nav-link {{ request()->is('rekomendasiopds*') ? 'active' : '' }}">
                  <i class="far fa-file-alt nav-icon"></i>
                  <p>Rekomendasi OPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('permintaans.index') }}"
                  class="nav-link {{ request()->is('permintaans*') ? 'active' : '' }}">
                  <i class="far fa-file-alt nav-icon"></i>
                  <p>Permintaan Download</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('lppms.index') }}" class="nav-link {{ request()->is('lppms*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-university"></i>
              <p>
                LPPM
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admins.index') }}" class="nav-link {{ request()->is('admins*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Daftar Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://kajian.jogjakota.go.id/Spasial"
              class="nav-link {{ request()->is('https://kajian.jogjakota.go.id/Spasial') ? 'active' : '' }}">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Spasial
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('tentang') }}" class="nav-link {{ request()->is('tentang') ? 'active' : '' }}">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Tentang
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 
</body>

</html>
