@extends('layouts.master')

@section('head.title')
    Show Article
@endsection

@section('body.content')  
<div class="container">
    {{-- Start --}}
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
        <a href="{{url('/')}}" class="btn btn-link btn--back">
                <i class="fa fa-chevron-left"></i>
                Back to home
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <h3>{{ $article->title }}</h3>
            <p>{{ $article->content }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3 btn-control">
        <a href="{{route('article.edit', $article->id)}}" class="btn btn-info text-light">Edit</a>
        {!! Form::open([
            'route'     =>  ['article.destroy', $article->id],
            'method'    =>  'delete'
        ]) !!}
        <button class="btn btn-danger">Delete</button>
        {!! Form::close() !!}
        </div>
    </div>
    {{-- End --}}
</div>
@endsection
