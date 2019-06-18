{{--
    resources/views/templates/partials/nav.blade.php
 --}}

<!-- HEADER -->
<div id="wrapper-header">
  <div id="main-header" class="object">
    <a href="{{ route('homepage') }}">
      <div class="logo">
        <img src="{{asset('img/logo-burst.png')}}" alt="logo platz" height="38" width="90">
      </div>
    </a>

    <div id="main_tip_search">
      <!-- Right Side Of Navbar -->
      <ul class="ml-auto menuConnexion">
          <!-- Authentication Links -->
          @guest
            <li class="nav-item">
              <a class="" href="{{ route('login') }}">{{ __('Connexion') }}</a>
            </li>
            @if (Route::has('register'))
              <li class="nav-item">
                  <a class="" href="{{ route('register') }}">{{ __('Inscription') }}</a>
              </li>
            @endif
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('dashboard-form').submit();">{{ __('Dashboard') }}</a>
                <form id="dashboard-form" method="get" action="{{ route('voyager.dashboard') }}" style="display: none;"> @csrf </form>

                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Deconnexion') }}</a>
                <form id="logout-form" method="post" action="{{ route('logout') }}" style="display: none;"> @csrf </form>

              </div>
            </li>
          @endguest
      </ul>
    </div>

    <div id="stripes"></div>
  </div>
</div>


<!-- NAVBAR -->
<div id="wrapper-navbar">
  <div class="navbar_ object">
    <div id="wrapper-bouton-icon">
      @include('categories.menuIcon')
    </div>
  </div>
</div>

<!-- FILTER -->
<div id="main-container-menu" class="object">
  <div class="container-menu">
    <div id="main-cross">
      <div id="cross-menu"></div>
    </div>
    <div id="main-small-logo">
      <div class="small-logo"></div>
    </div>
    <div id="main-premium-ressource">
      @include('categories.menu')
    </div>
  </div>
</div>
