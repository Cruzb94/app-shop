@extends('layouts.app')
@section('title', 'App Shop | Dashboard')
@section('body-class','profile-page')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
 
      <div class="section ">
        <h2 class="title text-center">Dashboard</h2>

        @if (session('notification'))
            <div class="alert alert-success" role="alert">
                {{ session('notification') }}
            </div>
        @endif

       <ul class="nav nav-pills nav-pills-icons" role="tablist">
            <!--
                color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
            -->
            <li class="nav-item">
                <a class="nav-link active" href="#dashboard-1" role="tab" data-toggle="tab">
                    <i class="material-icons">dashboard</i>
                    Carrito de compras
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                    <i class="material-icons">list</i>
                    Pedidos
                </a>
            </li>
        </ul>
        <hr>
        <p>Tu carrito de compras contiene {{ auth()->user()->cart->details->count() }} productos</p>


        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
              @foreach(auth()->user()->cart->details as $detail)
                <tr>
                    <td class="text-center">
                        <img src="{{ $detail->product->featured_image_url }}" alt="" height="50">
                    </td>
                    <td><a href="{{ url('/products/'.$detail->product->id)}}" target="_blank"> {{ $detail->product->name }} </a></td>
                    <td>$ {{ $detail->product->price }}</td>
                    <td>{{ $detail->quantity }}</td>
                    <td>$ {{ $detail->quantity * $detail->product->price }}</td>
                    <td style="display: inline-grid;">
                        <a href="{{ url('/products/'.$detail->product->id)}}" target="_blank" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-info"></i>
                        </a>
                        <form action="{{ url('/cart') }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">
                          <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                          
                        </button>
                        </form>
                        
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
            
        <div class="text-center">

            <form action="{{ url('/order') }}" method="post">
                {{ csrf_field() }}
            
                <button class="btn btn-primary btn-round">
                  <i class="material-icons">done</i> Realizar pedido
                </button>
            </form>
        </div>
        
      </div>

    </div>
  </div>
  
@include('includes.footer')
@endsection
