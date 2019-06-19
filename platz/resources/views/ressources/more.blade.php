{{--
      resources/views/ressources/more.blade.php
      Variables disponibles :
        $ressources Array (OBJ (id, titre, texte, date, document, image, user, categorie))
 --}}


    <div class="wrapper-morefrom">
      <div class="text-morefrom">More from {{ $ressource->categories->nom }}</div>

      <div class="image-morefrom">
          @foreach ($ressourcesRelated as $ressourceRelated)
          <a href="{{ route('ressources.show', $ressourceRelated->id)}}"><div class="image-morefrom-1"><img src="storage/{{ $ressourceRelated->image}}" alt="" width="430" height="330"/></div></a>
          @endforeach
      </div>
      
    </div>
  </div>
</div>
