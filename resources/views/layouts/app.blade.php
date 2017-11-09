<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'LSAPP')}}</title>

        <!-- Bootstrap Stylesheet -->        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Internal style -->
        <style>
            .fix {
                margin-top: 65px;
            }
            h1 {
                font-size: 45px !important;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        @include('inc.navbar')
        
        <!-- Content -->
        <div class="container fix">
            @yield('content')        
        </div>
    </body>
</html>
