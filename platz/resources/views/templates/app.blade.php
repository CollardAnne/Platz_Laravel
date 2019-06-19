{{--
    resources/views/templates/app.blade.php
    Template général
 --}}

<!DOCTYPE HTML>
  <html>
    @include('templates.partials.head')

    <body>
      <a name="ancre"></a>
      <!-- CACHE -->
      <div class="cache"></div>

      <!-- Navigation -->
      @include('templates.partials.nav')

     <!-- PORTFOLIO -->
     <div id="wrapper-container">

        <!-- CONTENU -->
        <main>
          @include('flash')
          @section('contenu')
          @show

        </main>

        <!-- Footer -->
        @include('templates.partials.footer')
    </div>

    <!-- Scripts -->
    @include('templates.partials.scripts')

  </body>
</html>
