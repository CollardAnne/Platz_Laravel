{{--
      resources/views/users/mes-ressources.blade.php
      Variables disponibles :
        $
 --}}

 @extends('templates.app')

 @section('title')
   Mes ressources
 @stop

 @section('contenu')


    <div class="container">
      <div class="row justify-content-center marge">

        <div class="col-md-4">
          <div class="card espace" style="padding:20px;">

            <img class="image-profil" src="storage/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
            <div class="ligne"></div>

            <div class="titre-profil-2">{{ Auth::user()->name }}</div>
            <div class="mail-profil">{{ Auth::user()->email }}</div>

          </div>
        </div>

        <div class="col-md-8">
          <div class="card espace" style="padding:20px;">

            <div class="title-text" style="padding-bottom:40px;">Mes ressources</div>

            <div class="">


              @foreach ($ressources as $ressource)

                <div class="title-item">
                  <div class="title-text">{{ $ressource->titre }}</div>
                  <div class="title-text-2">{{ date('d-m-Y', strtotime($ressource->date))}} </div>
                </div>
                <div class="work">
                  <figure class="white">
                    <img src="{{asset('storage/'.$ressource->image) }}" alt="{{ $ressource->titre }}" />
                  </figure>

                  <div class="wrapper-text-description">
                    <div class="wrapper-weight">
                      <div class="icon-weight"><img src="{{asset('img/icon-weight.svg')}}" alt="" width="20" height="23"/></div>
                      <div class="text-weight">
                        <?php
                          $filesize = filesize('storage/'.$ressource->image)/10000;
                          echo (int)$filesize.' Mo';
                        ?>
                      </div>
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

                    <div class="wrapper-desc">
                      <div class="icon-desc"><img src="{{asset('img/icon-desc.svg')}}" alt="" width="24" height="24"/></div>
                      <div class="text-desc">{{ $ressource->texte }} </div>
                    </div>

                  </div>
                </div>

              @endforeach

            </div>

          </div>
        </div>

      </div>
    </div>


 @endsection
