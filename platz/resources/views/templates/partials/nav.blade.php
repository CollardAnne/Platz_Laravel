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
            <li class="nav-item"><a href="{{ route('login') }}">Connexion</a></li>
            <li class="nav-item"><a href="{{ route('register') }}">Inscription</a></li>
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"><img src="storage/{{Auth::user()->avatar}}" alt="" width="30px" style="padding-left:5px; margin-bottom:5px;"></span>
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('voyager.dashboard') }}">Dashboard</a>
                <a class="dropdown-item" href="{{ route('users.edit') }}">Mon profil</a>
                <a class="dropdown-item" href="{{ route('ressources.indexByUser') }}">Mes ressources</a>
                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Deconnexion</a>
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
