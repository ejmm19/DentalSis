@extends('layouts.app')
@section('content')
<div class="container p-2">
    <div class="d-flex justify-content-center">
      <div class="col-lg-6" id="content-form-log">
        <img src="{{url('img/logo-array.png')}}" width="50%" class="mx-auto d-block" alt="">
        <legend class="text-center mb-0" >@{{ NombreEmpresa }}</legend>
        <p class="text-center  mb-3">@{{ SloganEmpresa }}</p>
        <form class="" action="{{ route('register') }}" method="post">
          {{ csrf_field() }}
          <div class="col-lg-12">
            <div class="md-form{{ $errors->has('name') ? ' has-error' : '' }}">
                <i class="fas fa-user prefix grey-text"></i>
                {{-- <i class="fa fa-envelope prefix grey-text"></i> --}}
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                <label for="materialFormLoginEmailEx">Nombre</label>
            </div>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="col-lg-12">
            <div class="md-form{{ $errors->has('usuario') ? ' has-error' : '' }}">
                <i class="fas fa-user prefix grey-text"></i>
                {{-- <i class="fa fa-envelope prefix grey-text"></i> --}}
                <input id="usuario" type="text" class="form-control" name="usuario" value="{{ old('usuario') }}" required>
                <label for="materialFormLoginUser">Usuario</label>
            </div>
            @if ($errors->has('usuario'))
                <span class="help-block">
                    <strong>{{ $errors->first('usuario') }}</strong>
                </span>
            @endif
          </div>
          <div class="col-lg-12">
            <div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
                <i class="fas fa-user prefix grey-text"></i>
                {{-- <i class="fa fa-envelope prefix grey-text"></i> --}}
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required >
                <label for="materialFormLoginEmailEx">Correo</label>
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>

          <div class="col-lg-12">
            <div class="md-form">
              <i class="fa fa-lock prefix grey-text"></i>
              <input id="password" type="password" class="form-control mb-4" name="password" required>
              <label for="materialFormLoginPasswordEx">Contraseña</label>
            </div>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="col-lg-12">
            <div class="md-form">
              <i class="fa fa-lock prefix grey-text"></i>
              <input id="password-confirm" type="password" class="form-control mb-4" name="password_confirmation" required>
              <label for="materialFormLoginPasswordEx">Confirmar contraseña</label>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="col-lg-5">
              <button type="submit" class="btn btn-success">Registrarse</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection
