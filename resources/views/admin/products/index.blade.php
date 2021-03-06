@extends('layouts.app')
@section('title', 'Listado de productos')
@section('body-class','profile-page')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">

</div>
<div class="main main-raised">
  <div class="container">
    <div class="section text-center">
      <h2 class="title">Listado de productos</h2>
      <div class="team">
        <div class="row">
          <a href="{{ url('/admin/products/create') }}" class="btn btn-primary btn-round">Nuevo Producto</a>
          <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
                <tr>
                    <td class="text-center">{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category ? $product->category->name : 'General' }}</td>
                    <td class="text-right">{{ $product->price }}</td>
                    <td style="display: inline-grid;">
                        <a href="" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-info"></i>
                        </a>
                        <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" rel="tooltip" title="Editar Producto" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ url('/admin/products/'.$product->id.'/images') }}" rel="tooltip" title="Imágenes del Producto" class="btn btn-warning btn-simple btn-xs">
                            <i class="fa fa-image"></i>
                        </a>
                        <form action="{{ url('/admin/products/'.$product->id) }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                          
                        </button>
                        </form>
                        
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-md-4 offset-md-4">{{ $products->links() }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
