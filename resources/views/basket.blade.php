@extends('master')

@section('contenu')
    <div class="products-list">
        <div>
          <p>{{ $basket }}</p>
            <p>{{ $basket->id }}</p>
        </div>
    </div>
@stop
