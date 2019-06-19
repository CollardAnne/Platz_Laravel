{{--
      resources/views/commentaires/index.blade.php
      Variables disponibles :
        $commentaires Array (OBJ (id, texte))
 --}}
 
<li>
  @foreach ($commentaires as $commentaire)
    <div class="post-reply">
      <div class="text-reply-post">{{ $commentaire->texte}}</div>
    </div>
  @endforeach
</li>
