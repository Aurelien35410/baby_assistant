<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loaded" data-textdirection="ltr" style="--vh:7.72px;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'Laravel') }}</title>





    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="resources\sass\vendors\css\vendors.min.css">
    <link rel="stylesheet" type="text/css" href="resources\sass\vendors\css\extensions\unslider.css">
    <link rel="stylesheet" type="text/css" href="resources\sass\vendors\css\weather-icons\climacons.min.css">
    <link rel="stylesheet" type="text/css" href="resources\sass\fonts\meteocons\style.css">
    <link rel="stylesheet" type="text/css" href="resources\sass\vendors\css\charts\morris.css">
    <!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="resources\sass\bootstrap.scss">
<link rel="stylesheet" type="text/css" href="resources\sass\bootstrap-extended.scss">
<link rel="stylesheet" type="text/css" href="resources\sass\colors.scss">
<link rel="stylesheet" type="text/css" href="resources\sass\components.scss">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="resources\sass\core\menu\menu-types\horizontal-menu.scss">
<link rel="stylesheet" type="text/css" href="resources\sass\core\colors\palette-gradient.scss">
<link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/simple-line-icons/style.css">
<link rel="stylesheet" type="text/css" href="resources\sass\pages\timeline.scss">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="resources\sass\style.css">
<!-- END: Custom CSS-->



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Tableau de Bord</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('newbottle') }}">Ajouter biberon</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


     <!-- BEGIN: Vendor JS-->
     <script src="resources\sass\vendors\js\vendors.min.js"></script>
     <!-- BEGIN Vendor JS-->

     <!-- BEGIN: Page Vendor JS-->
     <script src="resources\sass\vendors\js\ui\jquery.sticky.js"></script>
     <script src="resources\sass\vendors\js\charts\jquery.sparkline.min.js"></script>
     <script src="resources\sass\vendors\js\charts\raphael-min.js"></script>
     <script src="resources\sass\vendors\js\charts\morris.min.js"></script>
     <script src="resources\sass\vendors\js\extensions\unslider-min.js"></script>
     <script src="resources\sass\vendors\js\timeline\horizontal-timeline.js"></script>
     <!-- END: Page Vendor JS-->

     <!-- BEGIN: Theme JS-->
     <script src="resources\js\core\app-menu.js"></script>
     <script src="resources\js\core\app.js"></script>
     <!-- END: Theme JS-->

     <!-- BEGIN: Page JS-->
     <script src="resources\js\scripts\ui\breadcrumbs-with-stats.js"></script>
     <script src="resources\js\scripts\pages\dashboard-ecommerce.js"></script>
     <!-- END: Page JS-->




</body>
</html>
