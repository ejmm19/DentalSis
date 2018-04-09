  <nav class="mb-0 navbar navbar-expand-lg navbar-dark" id="nav-dashboard">
      @if (Cache::has('datempresa'))
        <a class="navbar-brand" href="{{ url('/home') }}">
            <img src="{{ url(Cache::get('datempresa')[0]->imagen) }}" height="40" alt="{{ Cache::get('datempresa')[0]->nombre }}" title="{{ Cache::get('datempresa')[0]->nombre }}" id="logo-empresa">
        </a>
        <a class="navbar-brand" href="{{ url('/home') }}" id="nombreempresa">{{ Cache::get('datempresa')[0]->nombre }}</a>
      @endif
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i> {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                <a class="dropdown-item waves-effect waves-light" href="{{url('/ajustes')}}"><i class="fas fa-cog"></i> Ajustes</a>
                <a class="dropdown-item waves-effect waves-light" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Salir</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
              </div>
            </li>
          </ul>
      </div>
  </nav>
