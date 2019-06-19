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
         <a href="{{ route('login') }}">Connexion</a>
       </div>
     </li>
     @if (Route::has('register'))
       <li>
         <div class="categorieMenu">
           <a href="{{ route('register') }}">Inscription</a>
         </div>
       </li>
      @endif
    @else
      <li>
        <div class="categorieMenu">
          <a href="{{ route('voyager.dashboard') }}">Dashboard</a>
        </div>
      </li>
      <li>
        <div class="categorieMenu">
          <a href="{{ route('users.edit') }}">Mon profil</a>
        </div>
      </li>
      <li>
        <div class="categorieMenu">
          <a href="{{ route('ressources.indexByUser') }}">Mes ressources</a>
        </div>
      </li>
      <li>
        <div class="categorieMenu">
          <a href="{{ route('logout') }}">Deconnexion</a>
        </div>
      </li>
    @endguest
 </ul>
