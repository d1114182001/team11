<html>
    <head>
        <title>@yield('title', '我國教育人口')</title>
        <link rel="stylesheet" href="{{ asset('/app.css') }}">     
    </head>
        @if(isset($pop) && $pop->isNotEmpty())
            @include('particials.navbar')
        @else  
            @yield('navbar')
        @endif
            
    <header>
        @if(isset($pop) && $pop->isNotEmpty())
            <div class="image"><img src="/pictures/62f0da478154a8e89b69f0a4_SDG目標04.png" alt="Cover Image"/></div>
        @else
            @yield('header')
        @endif
    </header>
    <body>
        
        <main>
            @yield('content')
            <!-- 給主模板的主要內容 -->
            @if(isset($pop) && $pop->isNotEmpty())
                @include('theform')
            @endif
            
        </main>
        
        @include('footer')
    </body>
</html>