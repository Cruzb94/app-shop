@extends('layouts.app')
@section('title', 'Bienvenido a App Shop')
@section('body-class','profile-page')
@section('styles')
<style>
  .team .row .col-md-4{
    margin-bottom: 3em;
  }
</style>
@endsection
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title"></h1>
          <h4></h4>
          <br>
          
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <div class="profile text-center">
              <div class="avatar">
                <img src="{{ $product->featured_image_url }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">{{ $product->name }}</h3>
                <h6>{{ $product->category->name }}</h6>
              </div>
            </div>
          </div>    
        </div>
        <div class="description text-center">
          <p>{{ $product->long_description}}</p>
        </div>
          
        <div class="text-center">
          <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#modalAddToCart">
            <i class="material-icons">add</i> Añadir al Carrito 
          </button>
        </div>

        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="studio">
            <div class="row">
              @foreach($images as $image)
              <div class="col-md-4">
                <div class="team-player">
                  <div class="card card-plain">
                    <div class="col-md-6 ml-auto mr-auto">
                      <img src="{{ $image->image }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="works">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="../assets/img/examples/olu-eletu.jpg" class="rounded">
                <img src="../assets/img/examples/clem-onojeghuo.jpg" class="rounded">
                <img src="../assets/img/examples/cynthia-del-rio.jpg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="../assets/img/examples/mariya-georgieva.jpg" class="rounded">
                <img src="../assets/img/examples/clem-onojegaw.jpg" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="favorite">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="../assets/img/examples/mariya-georgieva.jpg" class="rounded">
                <img src="../assets/img/examples/studio-3.jpg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="../assets/img/examples/clem-onojeghuo.jpg" class="rounded">
                <img src="../assets/img/examples/olu-eletu.jpg" class="rounded">
                <img src="../assets/img/examples/studio-1.jpg" class="rounded">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modalAddToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Seleccione la cantidad</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post">
          <div class="modal-body">
            <input type="number" name="quantity" value="1" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@include('includes.footer')
@endsection
