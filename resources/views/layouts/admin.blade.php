<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'AdminLTE - Dilesin')</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Beranda</a>
      </li>
    </ul>
  </nav>
  
  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('images/logo gunung lencana biru minimalis.png') }}" 
           alt="Dilesin Logo" 
           class="brand-image img-circle elevation-3" 
           style="opacity: .8">
      <span class="brand-text font-weight-light">Bank Sampah</span>
    </a>

    <!-- Sidebar Menu -->
    <div class="sidebar mt-3">
      <nav>
        <ul class="nav nav-pills nav-sidebar flex-column">

          <!-- Dashboard -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" 
               class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <!-- Data Siswa -->
          <li class="nav-item">
            <a href="{{ route('admin.students.index') }}" 
               class="nav-link {{ request()->routeIs('admin.students.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>Data Siswa</p>
            </a>
          </li>

          <!-- Tambah menu lain di sini -->
          {{-- 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>Nama Menu</p>
            </a>
          </li>
          --}}

        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content -->
  <div class="content-wrapper p-3">
    @yield('content')
  </div>

</div>
</body>
</html>
