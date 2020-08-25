@extends('layout')

@section('content')
  <div class='col-sm-8'>
    <h2>
      Nuevo producto
      <a href="{{ route('products.index') }}" class="btn btn-default pull-right">Listado</a>
    </h2>
    @include('products.fragment.error')
    <form action="{{ route('products.store')  }}" method="POST">
      {{ csrf_field()  }}
      @include('products.fragment.form')
    </form>
  </div>
  <div class='col-sm-4'>
    @include('products.fragment.aside')
  </div>
@endsection

