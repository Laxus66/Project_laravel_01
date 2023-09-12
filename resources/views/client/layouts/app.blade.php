<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Store</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('client/assets/images/logo.svg')}}" />
    <link rel="stylesheet" href="{{asset('client/dist/css/iconfont/tabler-icons.css')}}">
    <link rel="stylesheet" href="{{asset('client/dist/css/style.css')}}">
</head>

<body>
    <!-- Header Start -->
    @include('client.layouts.header')
    <!-- Header End  -->
    @yield('content')
    <!-- Footer Section Start  -->
    @include('client.layouts.footer')
    <!-- Footer Section End  -->
    <!----------- Js Libs ---------->
    <script src="{{asset('client/dist/js/jquery.min.js')}}"></script>
    <script src="{{asset('client/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/dist/js/custom.js')}}"></script>
    <!----------- Js Libs End---------->
</body>

</html>