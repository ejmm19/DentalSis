<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/mdb.min.css')}}">
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link rel="stylesheet" href="{{url('css/alertify.min.css')}}">
        <title>Dental Sis</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body class="fixed-sn light-blue-skin">
      <div id="preloader">
        <img src="{{url('img/loading.gif')}}" width="15%" class="mx-auto d-block" alt="">
      </div>

        @if (!Auth::guest()) {{-- preguntamos si hay usuario logueado --}}
          @include('layouts.parts.nav')
          <div class="container-fluid" id="container-content">
            <div class="row">
              <div class="col-lg-2 p-0">
                @include('layouts.parts.nav-lat')
              </div>
              <div class="col-lg-10">
                @yield('content')
              </div>
            </div>
          </div>
        @else {{-- si no hay usuario logeado muestre solo el contenido en este caso la vista login --}}
            @yield('content')
        @endif



      <script src="{{url('js/jquery-3.2.1.min.js')}}" charset="utf-8"></script>
      <script src="{{url('js/popper.min.js')}}" charset="utf-8"></script>
      <script src="{{url('js/bootstrap.min.js')}}" charset="utf-8"></script>
      <script src="{{url('js/mdb.min.js')}}" charset="utf-8"></script>
      <script src="{{url('js/vue.js')}}" charset="utf-8"></script>
      <script src="{{url('js/axios.min.js')}}" charset="utf-8"></script>
      <script src="{{url('js/fontawesome-all.js')}}" charset="utf-8"></script>
      <script src="{{url('js/alertify.min.js')}}" charset="utf-8"></script>
      <script src="{{url('js/script.js')}}" charset="utf-8"></script>
    </body>
</html>
