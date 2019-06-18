{{--
      resources/views/newsletters/create.blade.php
 --}}
<div id="main_tip_newsletter">
  @if ($errors->any())
   <div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
         @endforeach
     </ul>
   </div><br />
 @endif
  <form method="post" action="{{route('newsletters.store')}}" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="email" placeholder="Email"></label>
      <input type="text" name="email" id="tip_newsletter_input" list="newsletter" autocomplete=off required>
    </div>
  </form>
</div>
