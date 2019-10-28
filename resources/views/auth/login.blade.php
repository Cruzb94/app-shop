@extends('layouts.app')

@section('body-class','login-page sidebar-collapse')
@section('content')
<div class="page-header header-filter" style="background-image: url('{{ asset('img/bg7.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Inicio de sesión</h4>
              </div>
              <p class="description text-center">Ingresa tus datos</p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" id="password" name="password" required placeholder="Password...">
                </div>
              </div>
              <div class="checkbox">
                <label for="" style="margin-left: 60px; margin-top: 10px;">
                  <input type="checkbox" name="remember" {{ old('remember') ? 'cheked' : '' }}>
                  Recordar sesión
                </label>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Ingresar</button><br>
                <a href="{{ route('password.request') }}" class="btn btn-link">¿Olvidaste tu contraseña?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   @include('includes.footer')
  </div>
@endsection
