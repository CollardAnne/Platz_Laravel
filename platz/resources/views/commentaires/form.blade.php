{{--
      resources/views/commentaires/form.blade.php
      Variables disponibles :
        $commentaires Array (OBJ (id, texte,name))
 --}}

@auth
  <div id="title-post-send">Add your comment</div>

  <form id="contact" method="get" action="{{route('ajax.insert')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        {{-- <input type="text" id="tip_name_input" placeholder="Votre Nom" > --}}
    </div>
    <div class="form-group row">
      <fieldset>
        <textarea id="message" name="message" maxlength="500" placeholder="Votre Message" tabindex="5" cols="30" rows="4" style = "margin-top:0px;"></textarea>
      </fieldset>
      <input type="hidden" id="ressource" value='{{$ressource->id}}'>
      <input type="hidden" id="user_id" value='{{$ressource->user}}'>
    </div>
    <div class="form-group row">
      <div style="text-align:center;"><input type="submit" id="envoi" name="envoi" value="Envoyer" /></div>
    </div>

  </form>
@endauth

@guest
  <div id="title-post-send">Login to comment</div>
@endguest
