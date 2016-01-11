@extends('master')

@section('contenu')

    <table class="u-full-width">
        <thead>
        <tr>
            <th>Status</th>
            <th>Title</th>
            <th>Category</th>
            <th>Date</th>
            <th>Price</th>
            <th>Edition</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->status }}</td>
            <td><a href="{{ url('/product/'.$product->id) }}" target="_blank">{{ $product->title }}<a/></td>
            <td>{{ $product->category->title }}</td>
            <td>{{ $product->publish_date }}</td>
            <td>{{ $product->price }}</td>
            <td><a href="{{ url('dashboard/product/'.$product->id.'/edit') }}">Edit</a></td>
            <td><a href="{{ url('dashboard/product/'.$product->id) }}">Delete</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

@stop
