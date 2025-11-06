<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') - Task 9 Dashboard</title>

  <!-- AdminLTE core -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
      background-color: #f8fafc;
    }

    /* Sidebar */
    .main-sidebar {
      background-color: #1e293b;
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 230px;
      overflow-y: auto;
    }

    /* Marca Menus Admin */
    .brand-link {
      display: flex;
      align-items: center;
      justify-content: center; /* centrado horizontal */
      flex-direction: row;
      padding: 1.5rem 0;
      font-weight: 700;
      font-size: 1.1rem;
      color: #f1f5f9 !important;
      border-bottom: 1px solid #334155;
      text-decoration: none;
      text-align: center;
      letter-spacing: 0.3px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      transition: all 0.3s ease-in-out;
    }

    .brand-link:hover {
      color: #ffffff !important;
      background-color: #334155;
    }

    .brand-link i {
      margin-right: 8px;
      font-size: 1.1rem;
    }

    /* Navegación lateral */
    .nav-sidebar .nav-link {
      color: #cbd5e1;
      border-radius: 8px;
      margin: 6px 10px;
      padding: 10px 15px;
    }

    .nav-sidebar .nav-link.active {
      background-color: #3b82f6;
      color: white;
    }

    .nav-sidebar .nav-link:hover {
      background-color: #475569;
      color: white;
    }

    /* Encabezado superior */
    .main-header {
      position: fixed;
      top: 0;
      left: 230px;
      right: 0;
      height: 60px;
      background-color: #f1f5f9;
      border-bottom: 1px solid #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 2rem;
      z-index: 1000;
      box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }

    .main-header h4 {
      margin: 0;
      font-weight: 700;
      color: #1e293b;
    }

    /* Área de contenido */
    .content-wrapper {
      margin-left: 230px;
      padding: 5rem 2rem 2rem; /* espacio adicional por el header fijo */
      min-height: 100vh;
      background-color: #f8fafc;
    }

    .content-wrapper h1 {
      margin-bottom: 1rem;
      font-weight: 700;
      color: #1e293b;
    }

    .content-wrapper p {
      color: #475569;
      font-size: 1rem;
    }

    /* Footer */
    .main-footer {
      margin-left: 230px;
      background-color: #f1f5f9;
      border-top: 1px solid #e2e8f0;
      text-align: center;
      padding: 12px 0;
    }

    /* Opcional: animación de hover en los íconos */
    .nav-link i {
      transition: transform 0.2s ease-in-out;
    }

    .nav-link:hover i {
      transform: scale(1.1);
    }
  </style>
</head>
<body class="hold-transition">

  <!-- Sidebar -->
  <aside class="main-sidebar elevation-4">
    <a href="{{ url('/') }}" class="brand-link">
      <i class="fa-solid fa-layer-group mr-1"></i> Menus Admin
    </a>

    <div class="sidebar">
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/photos') }}" class="nav-link {{ request()->is('photos') ? 'active' : '' }}">
              <i class="nav-icon fas fa-image"></i>
              <p>Photos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Contact</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Encabezado fijo -->
  <header class="main-header">
    <h4>Task 9 – Dashboard</h4>
  </header>

  <!-- Contenido principal -->
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer class="main-footer">
    <strong>Developed by:</strong> Monica Yuliana Alvarado Tamayo - Sharon Chelsea Morales Torres - Melani Yaribeth Cruz Sorola - Tecmilenio
  </footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
