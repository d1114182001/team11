<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
    
        .navbar {
            background-color: #003366; /* 深蓝色 */
            border-radius: 0;
        }
    
        .navbar-brand {
            color: #ffffff;
            font-size: 1.5rem;
            font-weight: bold;
        }
    
        .navbar-nav .nav-link {
            color: #ffffff;
            font-size: 1.1rem;
        }
    
        .navbar-nav .nav-link:hover {
            color: #ffcc00; /* 明亮黄色，增加对比度 */
        }
    
        .card {
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            background: #ffffff;
        }
    
        .card-header {
            background-color: #004080; /* 深蓝色，略微浅一点 */
            color: white;
            border-radius: 20px 20px 0 0;
            font-size: 1.5rem;
            padding: 20px;
        }
    
        .card-body {
            padding: 30px;
            text-align: center;
        }
    
        .alert {
            font-size: 1.1rem;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #cce5ff; /* 淡蓝色背景 */
            color: #004085; /* 深蓝色文字 */
        }
    
        .btn-custom {
            background-color: #0056b3; /* 蓝色 */
            color: white;
            padding: 12px 24px;
            font-size: 1.1rem;
            border-radius: 30px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
    
        .btn-custom:hover {
            background-color: #003366; /* 更深的蓝色 */
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
        }
    
        .container {
            padding-top: 80px;
        }
    
        /* 响应式调整 */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.3rem;
            }
    
            .card-header {
                font-size: 1.3rem;
            }
    
            .btn-custom {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn-custom" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn-custom" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

</body>
</html>
