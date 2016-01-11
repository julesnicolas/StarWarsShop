@extends('master')

@section('contenu')
    <div class="products-list">
        <div>
          @foreach($basket->products as $product)
          <img src="{{ $product->media->name }}"/>
          <p>{{ $product->title }}</p>
          <p>{{ $product->price }} €</p>
          @endforeach
          <p>{{ $basket->total }}</p>
        </div>
    </div>
@stop
