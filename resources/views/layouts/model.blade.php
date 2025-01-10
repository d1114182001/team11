<html>
    <head>
        
        <title>@yield('title', '我國教育人口')</title>
        <link rel="stylesheet" href="{{ asset('/app.css') }}">
        <script src="test.js"></script>     
    </head>
        
        @yield('navbar')
    
            
    <header>
        
        @yield('header')
        
    </header>
    <body>
        
        <main>
         
        @yield('content')
           
        </main>
        
        @include('footer')
    </body>
</html>