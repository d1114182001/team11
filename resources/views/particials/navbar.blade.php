<!-- navbar.blade.php -->
<nav class="navbar">
    <div class="container">
        <!--<img src="/pictures/E_SDG_Icons-04.jpg" width="80" alt="dd"/>-->
        <img src="{{ $navbarImage ?? '/pictures/E_SDG_Icons-04.jpg' }}" width="80"/>
        <!--<span class="sitename">Quality Education(優質教育)</span>-->
        <span class="sitename">{{ $navbarText ?? 'Quality Education(優質教育)' }}</span>
        <ul>
            <li>
              <a href="http://127.0.0.1:8000">Home</a>
            </li>
            <li>
              <a href="{{ route('login') }}">Login</a>
            </li>
            <li>
              <a href="{{ route('register') }}">Register</a>
            </li>
            <li>
              <a href="{{ route('about') }}">About Other SDG</a>
            </li>
          </ul>    
    </div>
</nav>
