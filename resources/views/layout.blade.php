<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $title }}</title>

  <link rel="stylesheet" href="assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="/assets/compiled/css/table-datatable-jquery.css">

  <link rel="shortcut icon" href="/assets/compiled/svg/favicon.svg" type="image/x-icon">
  <link rel="shortcut icon"
    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
    type="image/png">

  <link rel="stylesheet" href="/assets/compiled/css/app.css">
  <link rel="stylesheet" href="/assets/compiled/css/app-dark.css">
  <link rel="stylesheet" href="assets/extensions/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">




</head>

<body>
  <script src="/assets/static/js/initTheme.js"></script>
  <div id="app">

    @include('sidebar')

    <div id="main" class='layout-navbar navbar-fixed'>
      <header>
        <nav class="navbar navbar-expand navbar-light navbar-top">
          <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
              <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse gap-3" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-lg-0">
                <li class="nav-item dropdown me-1">
                  <a class="nav-link active text-gray-600" href={{ route('message.requestLeavePage') }}>
                    <i class='bi bi-envelope bi-sub fs-4'></i>
                    <!-- <span class="badge badge-notification bg-danger">1</span> -->
                  </a>
                  <!-- <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li>
                      <h6 class="dropdown-header">Mail</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">No new mail</a></li>
                  </ul> -->
                </li>
                <!-- <li class="nav-item dropdown me-3">
                  <a class="nav-link active dropdown-toggle text-gray-600" href="#" data-bs-toggle="dropdown"
                    data-bs-display="static" aria-expanded="false">
                    <i class='bi bi-bell bi-sub fs-4'></i>
                    <span class="badge badge-notification bg-danger">7</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end notification-dropdown"
                    aria-labelledby="dropdownMenuButton">
                    <li class="dropdown-header">
                      <h6>Notifications</h6>
                    </li>
                    <li class="dropdown-item notification-item">
                      <a class="d-flex align-items-center" href="#">
                        <div class="notification-icon bg-primary">
                          <i class="bi bi-cart-check"></i>
                        </div>
                        <div class="notification-text ms-4">
                          <p class="notification-title font-bold">Successfully check out</p>
                          <p class="notification-subtitle font-thin text-sm">Order ID #256</p>
                        </div>
                      </a>
                    </li>
                    <li class="dropdown-item notification-item">
                      <a class="d-flex align-items-center" href="#">
                        <div class="notification-icon bg-success">
                          <i class="bi bi-file-earmark-check"></i>
                        </div>
                        <div class="notification-text ms-4">
                          <p class="notification-title font-bold">Homework submitted</p>
                          <p class="notification-subtitle font-thin text-sm">Algebra math homework</p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <p class="text-center py-2 mb-0"><a href="#">See all notification</a></p>
                    </li>
                  </ul>
                </li> -->
              </ul>
              <div class="dropdown">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="user-menu d-flex">
                    @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'Pegawai')
                    <div class="user-name text-end me-3">
                      <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                      <p class="mb-0 text-sm text-gray-600">{{ Auth::user()->role }}</p>
                    </div>
                    @endif
                    <div class="user-img d-flex align-items-center">
                      <div class="avatar avatar-md">
                        <img src="/assets/compiled/jpg/1.jpg">
                      </div>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                  style="min-width: 11rem;">
                  <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                      Profile</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href={{ route('logout') }}><i
                        class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <div id="main-content">

        <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $header }}</h3>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>



        @yield('content')



      </div>

    </div>



  </div>



  <script src="/assets/static/js/components/dark.js"></script>
  <script src="/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="/assets/compiled/js/app.js"></script>

  <!-- <script src="/assets/extensions/jquery/jquery.min.js"></script>
  <script src="/assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
  <script src="/assets/static/js/pages/datatables.js"></script> -->

  <script src="/assets/extensions/sweetalert2/sweetalert2.min.js"></script>
  <script src="/assets/js/pages/sweetalert2.js"></script>
  <!-- Need: Apexcharts -->
  <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
  <script src="assets/static/js/pages/dashboard.js"></script>

  @if (session('success'))
  <script>
    Swal.fire({
      icon: "success",
      title: "Welcome",
      timer: 2000,
      text: "{{ session('success') }}"
    })
  </script>
  @endif

  @if (session('error'))
  <script>
    Swal.fire({
      icon: "error",
      title: "Error",
      timer: 2000,
      text: "{{ session('error') }}"
    })
  </script>
  @endif



</body>



</html>