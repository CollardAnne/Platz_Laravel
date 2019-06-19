{{--
      resources/views/users/mon-profil.blade.php
      Variables disponibles :
        $
 --}}

 @extends('templates.app')

 @section('title')
   Mon profil
 @stop

 @section('contenu')
  <form method="POST" action="{{ route('users.update')}}">
    @method('patch')
    @csrf

    <div class="container">
      <div class="row justify-content-center marge">

        <div class="col-md-4">
          <div class="card espace" style="padding:20px;">

            <img class="image-profil" src="storage/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">

            <div class="form-group" style="margin:auto;">
              <label for="file" class="label-file-profil">Choisir un nouvel avatar</label>
              <input id=file type="file" name="avatar" class="input-file-profil">
            </div>
            <div class="ligne"></div>

            <div class="titre-profil-2">{{ Auth::user()->name }}</div>
            <div class="mail-profil">{{ Auth::user()->email }}</div>

          </div>
        </div>

        <div class="col-md-8">
          <div class="card espace" style="padding:20px;">

            <div class="title-text" style="padding-bottom:40px;">Mon Profil</div>

            <div class="form-group">
              <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control @error('name') is-invalid @enderror" placeholder="Nom" required>
                @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                @error('email')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <input id="password" type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Mot de passe">
                @error('password')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
              <div class="message-profil">Laissez vide pour garder le même</div>
            </div>
            <div class="form-group">
              <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Confirmez le mot de passe">
            </div>
            <div class="btn-edit">
              <button type="submit" class="btn btn-primary">Editer mon profil</button>
            </div>

          </div>
        </div>

      </div>
    </div>
  </form>

 @endsection
