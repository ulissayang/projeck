<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    @isset($title)
    {{ $title }} | sdn 260 malteng
    @else
    sdn 260 malteng
    @endisset
  </title>

  <!-- Favicons -->
  <link href="{{ asset('guest/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('guest/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('guest/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('guest/assets/vendor/bootstrap-icons/bootstrap-icons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('guest/assets/vendor/aos/aos.css')  }}" rel="stylesheet">
  <link href="{{ asset('guest/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('guest/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('guest/assets/css/style1.css') }}">
</head>

<body class="font-sans antialiased ">

  <x-navbar />

  {{ $slot }}

  <x-guest.footer />


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-rocket"></i></a>

  {{-- <div id="preloader"></div> --}}


  <!-- Vendor JS Files -->
  <script src="{{ asset('guest/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('guest/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('guest/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('guest/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('guest/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('guest/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('guest/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('guest/assets/js/main.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
  </script>

</body>

</html>