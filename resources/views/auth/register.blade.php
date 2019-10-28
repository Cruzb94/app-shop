@extends('layouts.app')
@section('body-class','login-page sidebar-collapse')
@section('content')
<div class="page-header header-filter" style="background-image: url('{{ asset('img/bg7.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}

              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Registro</h4>
              </div>
              <p class="description text-center">Completa tus datos</p>
              <div class="card-body">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" id="name" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
                  @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="Correo">
                  @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required placeholder="Contraseña">
                  @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required placeholder="Confirmar Contraseña">
                </div>
              </div>

              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Confirmar registro</button><br>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @include('includes.footer')
  </div>
@endsection
