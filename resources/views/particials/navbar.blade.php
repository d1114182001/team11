<!-- navbar.blade.php -->
<nav class="navbar">
    <div class="container">
        <!--<img src="/pictures/E_SDG_Icons-04.jpg" width="80" alt="dd"/>-->
        <img src="{{ $navbarImage ?? '/pictures/E_SDG_Icons-04.jpg' }}" width="80"/>
        <!--<span class="sitename">Quality Education(優質教育)</span>-->
        <span class="sitename">{{ $navbarText ?? 'Quality Education(優質教育)' }}</span>
        <ul>
            <li>
              <a href="http://sdg04.lhu.edu.tw/">Home</a>
            </li>
            <li>
              <a href="#">contact</a>
            </li>
            <li>
              <a href="{{ route('about') }}">About Other SDG</a>
            </li>
          </ul>    
    </div>
</nav>
