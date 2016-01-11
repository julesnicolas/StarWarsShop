@extends('admin.masteradmin')

@section('contenu')

    <a class="button" href="{{ url('/dashboard/product') }}">Revenir au Dashboard</a>

    {!! Form::open(['url'=>'dashboard/product/'.$product->id,'route' => 'dashboard.product.destroy', 'method'=>'DELETE']) !!}

    {!! Form::submit('delete',['class'=>'button button-primary']) !!}

    {!! Form::close() !!}



@stop