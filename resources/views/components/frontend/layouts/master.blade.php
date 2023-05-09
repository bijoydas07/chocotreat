<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Choco Treat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('ui/frontend/assets/images')}}//favicon.png">
    <x-frontend.layouts.partials.css/>
    <x-frontend.layouts.partials.js/>
    
</head>

<body>
    <!--Start Preloader-->
    <div class="preloader-wrap">
        <div class="spinner"></div>
    </div>

    <!-- search-->
    <x-frontend.layouts.partials.search/>

    <!-- header-->
    <x-frontend.layouts.partials.header/>

    <!-- slider-->
    {{ $slot }}

    <!-- .footer-->
    <x-frontend.layouts.partials.footer/>

    <!-- jquery latest version -->
    <x-frontend.layouts.partials.js/>

</body>


</html>  