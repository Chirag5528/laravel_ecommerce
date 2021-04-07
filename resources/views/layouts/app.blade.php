<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css" rel="stylesheet">
    <title>Ecommerce - @yield('title')</title>
</head>

<body class="bg-gray-100">


<!-- start navbar -->
@include("layouts.partials.navbar")
<!-- end navbar -->


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    <!-- start sidebar -->
    @include('layouts.partials.sidebar')
    <!-- end sidbar -->

    <!-- strat content -->
    <div class="bg-gray-100 flex-1 md:mt-16 flex flex-row">
        @include("layouts.partials.aside")
        @yield('matter')
        <!-- end content -->
    </div>
    <!-- end content -->

</div>
<!-- end wrapper -->

<!-- script -->
<script src="{{ asset("js/scripts.js") }}"></script>
<!-- end script -->

</body>

</html>
