@extends('admin.masteradmin')

@section('contenu')

    {!! Form::open(array('route' => 'dashboard.product.store', 'files'=>true)) !!}
    <div class="row">
        <div class="four columns">
            {!! Form::label('title','title',['for'=>'title']) !!}
            {!! Form::text('title') !!}
            {!! $errors->first('title','<span class="error">:message</span>') !!}
        </div>
    </div>
    <div class="row">
        <div class="four columns">
            {!! Form::label('content','content',['for'=>'content']) !!}
            {!! Form::textarea('content','',['class'=>'u-full-width']) !!}
            {!! $errors->first('content','<span class="error">:message</span>') !!}

            {!! Form::label('abstract','abstract',['for'=>'abstract']) !!}
            {!! Form::textarea('abstract','',['class'=>'u-full-width']) !!}
            {!! $errors->first('abstract','<span class="error">:message</span>') !!}
        </div>
    </div>
    <div class="row">
        <div class="four columns">
            {!! Form::label('category_id','categories') !!}
            {!! Form::select('cates', $cates, null)!!}
        </div>
    </div>
    <div class="row">
        <div class="four columns">
            {!! Form::label('price','price',['for'=>'price']) !!}
            {!! Form::text('price') !!}<i class="glyphicon glyphicon-euro"></i>
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
            {!! Form::input('date','publish_date') !!}
            {!! $errors->first('publish_date','<span class="error">:message</span>') !!}
        </div>
    </div>
    {!! Form::submit('create',['class'=>'button button-primary rightBtn']) !!}

    {!! Form::close() !!}

@endsection
