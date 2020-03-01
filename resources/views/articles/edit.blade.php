@extends('layouts.master')

@section('head.title')
    Edit Article
@endsection

@section('body.content')
<div class="container">

    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <h2>Edit article</h2>
            <hr>
        </div>
    </div> <!-- row -->

    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>   
            @endif

            {!! Form::model($article, 
                ['route' => ['article.update',$article->id],
                'method' => 'put'
            ]) !!}
                @include('articles._form', ['btn_name' => 'Update'])
            {!! Form::close()  !!}
        </div>
    </div> <!-- row -->

</div>
@endsection