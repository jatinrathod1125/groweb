<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 3 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons (CDN fallback for kit 403) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Material Icons -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('admin/css/material-dashboard.css?v=3.2.0') }}" rel="stylesheet" />

</head>

<body class="g-sidenav-show  bg-gray-100">
  @include('admin.components.sidebar')

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('admin.components.header')

    <div class="container-fluid py-4">
      @yield('content')

      @include('admin.components.footer')
    </div>
  </main>


  <script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/chartjs.min.js') }}"></script>
  @stack('scripts')
</body>

</html>