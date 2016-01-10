@extends('master')

@section('contenu')
    <div class="products-list">
        @foreach($products as $product)
        <div>
            <a href="{{ url('/product/'.$product->id) }}">{{ $product->title }}<a/>
            <img width="25%" src="{{ $product->media->name }}"/>
            <p>{{ $product->title }}</p>
            <p>{{ $product->abstract }}</p>
            <p>{{ $product->category->title }}</p>
            @foreach($product->tags as $tag)
                <p>{{ $tag->name }}</p>
            @endforeach
        </div>
        @endforeach
    </div>
@stop
