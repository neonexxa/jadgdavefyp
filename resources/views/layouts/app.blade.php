<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        
        .form-horizontal .control-label {
            text-align: start !important;
        }
        .navbar-default {
            background-color: #D80945;
            
        }
        .navbar-default .navbar-nav>li>a, .navbar-default .navbar-text{
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="navbar-brand-img hidden-xs" src="{{ asset('img/aia-logo.png') }}" style="width: 82px">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li><a href="{{ route('jobvac') }}">Job Vacancies</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="{{ route('home') }}">Interview Form</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        var childcontainer = document.getElementById('child');
        window.childnum = 0;
    function addchild() {
        childcontainer.insertAdjacentHTML('beforeend', '<div class="col-md-4"><input id="child['+childnum+'][cname]" name="child['+childnum+'][cname]" type="text" placeholder="Child Name" class="form-control input-md" required></div><div class="col-md-2"><input id="child['+childnum+'][crel]" name="child['+childnum+'][crel]" type="text" placeholder="Relationship" class="form-control input-md" required></div><div class="col-md-2"><input id="child['+childnum+'][cdob]" name="child['+childnum+'][cdob]" type="date" placeholder="Date of birth" class="form-control input-md" required></div><div class="col-md-2"><input id="child['+childnum+'][cic]" name="child['+childnum+'][cic]" type="text" placeholder="B. Cert / IC No" class="form-control input-md" required></div><div class="col-md-2"><select id="child['+childnum+'][cstatus]" name="child['+childnum+'][cstatus]" class="form-control"><option value="S">Student</option><option value="W">Working</option><option value="D">Disable</option></select></div>');
        console.log(window.childnum);
        window.childnum++;
    }
    </script>
</body>
</html>
