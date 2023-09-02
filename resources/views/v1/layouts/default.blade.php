<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@isset($title){{ $title }}@endisset</title>
    
    <meta content="" name="description">
    <meta content="" name="keywords">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

       <!-- Vendor CSS Files -->
       <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
       <link href="{{ asset('assets/css/landing.css') }}" rel="stylesheet">
    
</head>
<body>
@yield('content')

</body>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>