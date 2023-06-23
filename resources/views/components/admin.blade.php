<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>{{$title ?? ''}}</title>
  <link href="{{ asset('css/iziToast.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/theme.css') }}" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  @stack('styles')
</head>

<body class="thm-nav-fixed">
  <nav class="thm-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand ps-3" href="{{route('dashboard')}}">Admin Panel</a>

    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
      <i class="fas fa-bars"></i>
    </button>

    @include('shared.admin-nav')

    <div id="layoutSidenav">
      @include('shared.sidebar')

      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid">

            {{ $slot }}
          </div>
        </main>

        @include('shared.footer')
      </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/iziToast.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

    @include('shared.notifications')
    @stack('scripts')
</body>

</html>
