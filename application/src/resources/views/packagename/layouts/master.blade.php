<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('/vendor/packagename/css/bootstrap.min.css') }}" rel="stylesheet">

        <!--Custom Package specific Styles and Scripts-->
        <link href="{{ asset('/vendor/packagename/css/packagename-styles.css') }}" rel="stylesheet">

    </head>

    <body>
        <div id="wrapper">
            <!--Header and Navigation Sidebar-->
            <!-- Navigation -->
            <nav class="navbar navbar-fixed-top" role="navigation">
                @include('packagename::includes.header')
            </nav>
            <div id="page-wrapper">
                @yield('content')
            </div>
            @include('packagename::includes.footer')
        </div>
    </body>
</html>