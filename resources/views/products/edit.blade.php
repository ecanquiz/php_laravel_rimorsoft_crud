@extends('layout')

@section('content')
  <div class='col-sm-8'>
    <h2>
      Editar producto
      <a href="{{ route('products.index') }}" class="btn btn-default pull-right">Listado</a>
    </h2>
    <form action="{{ route('products.update', $product->id)  }}" method="POST">
      {{ csrf_field()  }}
      <input type="hidden" name="_method" value="PUT">
      @include('products.fragment.form')
    </form>
  </div>
  <div class='col-sm-4'>
    @include('products.fragment.aside')
  </div>
@endsection

