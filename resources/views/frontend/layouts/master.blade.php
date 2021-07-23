<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Crypto Classroom</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('ui/frontend') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('ui/frontend') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('ui/frontend') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('ui/frontend') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('ui/frontend') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('ui/frontend') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('ui/frontend') }}/css/style.css" rel="stylesheet">

 
</head>
		<body>
		@include('frontend.layouts.partials.header')

        @yield('content')

        @include('frontend.layouts.partials.footer')

		 <!-- Vendor JS Files -->
  <script src="{{ asset('ui/frontend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('ui/frontend') }}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('ui/frontend') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('ui/frontend') }}/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('ui/frontend') }}/vendor/purecounter/purecounter.js"></script>
  <script src="{{ asset('ui/frontend') }}/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('ui/frontend') }}/js/main.js"></script>

</body>

</html>