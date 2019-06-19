{{--
      resources/views/ressources/index.blade.php
      Variables disponibles :
        $ressources Array (OBJ (id, titre, texte, date, document, image, user, categorie))
 --}}

@extends('templates.app')

@section('title')
  Free Grid Wordpress Theme
@stop

@section('contenu')

<div class="container_ object">
  <div id="main-container-image">
    <section class="work_">

      @foreach ($ressources as $ressource)
        <figure class="white">
          <a href="{{ route('ressources.show', $ressource->id) }}">
            <img src="{{asset('storage/'.$ressource->image)}}" alt="{{ $ressource->titre }}" />
            <dl>
              <dt>{{ $ressource->titre }}</dt>
              <dd>{{ substr($ressource->texte, 0, 120) }}...</dd>
            </dl>
          </a>
          <div id="wrapper-part-info">
            <div class="part-info-image"><img src="{{asset('storage/'.$ressource->categories->icone) }}" alt="{{ $ressource->categories->nom }}" /></div>
            <div id="part-info">{{ $ressource->titre }}</div>
          </div>
        </figure>
      @endforeach

    </section>
  </div>
</div>

<div id="wrapper-oldnew">
  <div class="oldnew">
    <div class="paginate">
      {{ $ressources->links()}}
    </div>
  </div>
</div>
@stop
