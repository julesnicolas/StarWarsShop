@extends('master')

@section('contenu')
    <div class="products-list">
        <div>
            <p>{{ $product->title }}</p>
            <img width="100%%" src="{{ $product->media->name }}"/>
            <p>{{ $product->content }}</p>
            <p>{{ $product->price }} €</p>
            @foreach($product->tags as $tag)
                <p>{{ $tag->name }}</p>
            @endforeach
            {!! Form::open(['product/'.$product->id]) !!}
              <div>
                {!! Form::label('quantité') !!}
                {!! Form::select('quantity', array('1' => '1', '2' => '2', '3' => '3', '4' => '4',), null, ['placeholder' => 'Séléctionner la quantité...']) !!}
                {!! Form::hidden('product', $product->id) !!}
              </div>
              {!! Form::submit('Ajouter au panier !') !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
