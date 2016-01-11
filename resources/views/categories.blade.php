@extends('master')

@section('contenu')
<h1>{{ $category->title }}</h1>

@foreach($category->products as $product)
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img width="60%" src="{{ $product->media->name }}">
                </div>
                <div class="caption">
                  <h1>{{ $category->title }}</h1>
                  <h1><a href="{{ url('/product/'.$product->id) }}">{{ $product->title }}</a></h1>
                </div>
                  <p>{{ $product->abstract }}</p>
                  <h4 class="pull-right">{{ $product->price }}<i class="glyphicon glyphicon-euro"></i></h4>
            </div>
        @endforeach

@stop
