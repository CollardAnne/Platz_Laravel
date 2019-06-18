{{--
      resources/views/categories/menu.blade.php
      Variables disponibles :
        $categories Array (Categorie (id, nom, icone))
 --}}


 <ul>
   {{-- Menu des catégorie --}}
   @foreach ($categories as $categorie)
     <li>
       <div class="categorieMenu">
         <a href="/?categorie={{ $categorie->id }}">
           {{ $categorie->nom }}
         </a>
      </div>
     </li>
   @endforeach
   {{-- Menu de connexion au backoffice --}}
   @guest
     <li>
       <div class="categorieMenu">
         <a class="" href="{{ route('login') }}">{{ __('Connexion') }}</a>
       </div>
     </li>
     @if (Route::has('register'))
       <li>
         <div class="categorieMenu">
           <a class="" href="{{ route('register') }}">{{ __('Inscription') }}</a>
         </div>
       </li>
      @endif
    @else
      <li>
        <div class="categorieMenu">
          <a class="" href="{{ route('voyager.dashboard') }}">{{ __('Dashboard') }}</a>
        </div>
      </li>
      <li>
        <div class="categorieMenu">
          <a class="" href="{{ route('voyager.users.edit', Auth::user()->id) }}">{{ __('Profil') }}</a>
        </div>
      </li>
      <li>
        <div class="categorieMenu">
          <a class="" href="{{ route('logout') }}">{{ __('Deconnexion') }}</a>
        </div>
      </li>
    @endguest
 </ul>
