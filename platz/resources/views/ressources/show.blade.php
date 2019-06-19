{{--
      resources/views/ressources/show.blade.php
      Variables disponibles :
        $ressources Array (OBJ (id, titre, texte, date, document, image, user, categorie))
 --}}

@extends('templates.app')

@section('title')
  {{ $ressource->titre }}
@stop

@section('contenu')
  <div id="wrapper-container">
    <div class="container_ object">

      <div id="main-container-image">

        <div class="title-item">
          <div class="title-icon"><img src="{{asset('storage/'.$ressource->categories->icone) }}" /></div>
          <div class="title-text">{{ $ressource->titre }}</div>
          <div class="title-text-2">{{ date('d-m-Y', strtotime($ressource->date))}} by {{ $ressource->users->name}}</div>
        </div>

        <div class="work">
          <figure class="white">
             <img src="{{asset('storage/'.$ressource->image) }}" alt="{{ $ressource->titre }}" />
          </figure>

          <div class="wrapper-text-description">

            <div class="wrapper-file">
              <div class="icon-file"><img src="{{asset('storage/'.$ressource->categories->icone) }}" alt="" width="21" height="21"/></div>
              <div class="text-file"> {{ $ressource->categories->nom }}</div>
            </div>

            <div class="wrapper-weight">
              <div class="icon-weight"><img src="{{asset('img/icon-weight.svg')}}" alt="" width="20" height="23"/></div>
              <div class="text-weight">
                <?php
                  $filesize = filesize('storage/'.$ressource->image)/10000;
                  echo (int)$filesize.' Mo';
                ?>
              </div>
            </div>

            <div class="wrapper-desc">
              <div class="icon-desc"><img src="{{asset('img/icon-desc.svg')}}" alt="" width="24" height="24"/></div>
              <div class="text-desc">{{ $ressource->texte }}</div>
            </div>

            <div class="wrapper-download">
              <div class="icon-download"><img src="{{asset('img/icon-download.svg')}}" alt="" width="19" height="26"/></div>
              <div class="text-download">
                <?php
                  $file = (json_decode($ressource->document))[0]->download_link;
                  $filename = (json_decode($ressource->document))[0]->original_name;
                ?>
                <a href="#" onclick='window.open("{{ Voyager::image( $file ) }}"),"_blank"'><b>{{$filename}}</b></a>
              </div>
            </div>

            @include('ressources.more', ['ressource'=>$ressource,'ressourcesRelated'=>$ressourcesRelated])

            <div class="post-reply">
              <div id="title-post-send">
                <hr/><h2>Your comments</h2>
              </div>
            </div>

            <div class="post-reply">
              <ul id="liste">
                @foreach ($ressource->commentaires as $commentaire)
                  <div class="post-reply">
                    <div class="image-reply-post">
                      <img src="{{asset('storage/'.$commentaire->user->avatar) }}" width="65" height="65">
                    </div>
                    <div class="name-reply-post">{{is_null($commentaire->user) ? '-' :$commentaire->user->name}}</div>
                    <div class="text-reply-post">{{$commentaire->texte}}</div>
                  </div>
                @endforeach
              </ul>
            </div>

            <div class="post-send">
              <div id="main-post-send">
                @include('commentaires.form')
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@stop
