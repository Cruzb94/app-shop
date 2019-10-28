@extends('layouts.app')
@section('title', 'Bienvenido a App Shop')
@section('body-class','profile-page')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
 
      <div class="section ">
        <h2 class="title text-center">Registrar Nuevo Producto</h2>

        <form action="{{ url('/admin/products') }}" method="post">
          {{ csrf_field() }}

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Nombre del producto</label>
                <input type="text" class="form-control" name="name" />
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Precio del producto</label>
                <input type="number" class="form-control" name="price" />
              </div>
            </div>
          </div>

          
          <div class="form-group label-floating">
            <label class="control-label">Descripción corta</label>
            <input type="text" class="form-control" name="description" />
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripción Extensa del producto</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="long_description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Registrar Producto</button>
        </form>
        
      </div>

    </div>
  </div>
@include('includes.footer')
@endsection
