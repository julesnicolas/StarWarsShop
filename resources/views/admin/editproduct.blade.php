@extends('master')

@section('contenu')

    {!! Form::open(['url'=>'dashboard/product/'.$product->id,'route'=>'dashboard.product.update','method'=>'PUT','files'=>true]) !!}
    <div class="row">
        <div class="four columns">
            {!! Form::label('title','title',['for'=>'title']) !!}
            {!! Form::text('title',$product->title) !!}
            {!! $errors->first('title','<span class="error">:message</span>') !!}
        </div>
    </div>
    <div class="row">
        <div class="four columns">
            {!! Form::label('content','content',['for'=>'content']) !!}
            {!! Form::textarea('content',$product->content ,['class'=>'u-full-width']) !!}
            {!! $errors->first('content','<span class="error">:message</span>') !!}

            {!! Form::label('abstract','abstract',['for'=>'abstract']) !!}
            {!! Form::textarea('abstract',$product->abstract,['class'=>'u-full-width']) !!}
            {!! $errors->first('abstract','<span class="error">:message</span>') !!}
        </div>
    </div>
    <div class="row">
        <div class="four columns">
            {!! Form::label('category_id','categories') !!}
            {!! Form::select('item_id', $items, null)!!}
        </div>
    </div>
    <div class="row">
        <div class="four columns">
            {!! Form::label('price','price',['for'=>'price']) !!}
            {!! Form::text('price',$product->price )!!}<i class="glyphicon glyphicon-euro"></i>
            {!! $errors->first('price','<span class="error">:price</span>') !!}
        </div>
    </div>
    <div class="row">
        <div class="four columns">
            {!! Form::label('status','status',['for'=>'status']) !!}
            {!! Form::select('status',array(
                                            'published'=>'published',
                                            'unpublished'=>'unpublished',
                                            )
            )!!}
            {!! $errors->first('status','<span class="error">:message</span>') !!}
        </div>
    </div>
    <div class="row">
        <div class="four columns">
            {!! Form::label('image','image',['for'=>'image']) !!}
            {!! Form::file('image') !!}
        </div>
    </div>


    <div class="row ">
        @foreach($product->tags as $tag)

            <div class="two columns ">
                {!! Form::label($tag->id,$tag->name) !!}
                {!! Form::checkbox('tags[]',$tag->id, true) !!}
            </div>
        @endforeach
        @foreach($tags as $tag)

            <div class="two columns ">
                {!! Form::label($tag->id,$tag->name) !!}
                {!! Form::checkbox('tags[]',$tag->id) !!}
            </div>
        @endforeach

    </div>
    <div class="row">
        <div class="four columns">
            {!! Form::label('publish_date','publié le') !!}
            {!! Form::input('date','publish_date',\Carbon\Carbon::now()->toDateString()) !!}
            {!! $errors->first('publish_date','<span class="error">:message</span>') !!}
        </div>
    </div>
    {!! Form::submit('Update',['class'=>'button button-primary rightBtn']) !!}

    {!! Form::close() !!}

@endsection
