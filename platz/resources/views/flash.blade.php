{{--
  resources/views/flash.blade.php
 --}}
 
@if(session()->has('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
