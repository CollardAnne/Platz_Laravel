{{--
      resources/views/categories/menuIcon.blade.php
      Variables disponibles :
        $categories Array (Categorie (id, nom, icone))
 --}}


 <ul>
   <li>
     <a href="{{ route('homepage') }}">
       <img src="img/all.png" alt="view all" title="All ressources" height="28">
     </a>
   </li>
   @foreach ($categories as $categorie)
     <li>
       <a href="/?categorie={{ $categorie->id }}">
         <img src="storage/{{ $categorie->icone }}" alt="{{ $categorie->nom }}" title="{{ $categorie->nom }}" height="28">
       </a>
     </li>
   @endforeach
 </ul>
