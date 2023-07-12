<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    <meta name="keywords" content="@yield("keywords")">
    <meta name="description" content="@yield("description")">
    <meta name="author" content="Batuhan YAMANTÜRK">
    

    <link rel="apple-touch-icon" href="{{asset('assets')}}/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/img/logo.webp">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/templatemo.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset('assets')}}/css/fontawesome.min.css">
   

    @yield("head")
</head>
<body>
@include("home.header")
@include("home.searchbar")

@yield('content')


@include("home.footer")

@yield('foot')
</body>
</html>