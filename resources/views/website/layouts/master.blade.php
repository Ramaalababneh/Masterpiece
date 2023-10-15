<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uniformy</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet"> -->
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/barfiller.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/magnific-popup.css')}}"type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/style.css')}}">
</head>

<body>
    <!-- Page Preloder -->
    
    

@include('website.layouts.nav')
@yield('content')
@include('website.layouts.footer')

<!-- Js Plugins -->
<!-- Js Plugins -->
<script src="{{ asset('website/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('website/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('website/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('website/js/jquery.barfiller.js')}}"></script>
<script src="{{ asset('website/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('website/js/jquery.slicknav.js')}}"></script>
<script src="{{ asset('website/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('website/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{ asset('website/js/main.js')}}"></script>

</body>
</html>