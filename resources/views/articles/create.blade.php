@extends('layouts.master')

@section('head.title')
    Create Article
@endsection

@section('body.content')
<div class="container">

    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <h2>New article</h2>
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
            {{-- <form action="{{route('article.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input class="form-control" type="text" name="content" id="content" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Create</button>
                </div>
            </form> <!-- form --> --}}

            {!! Form::open(['route' => 'article.store']) !!}
                @include('articles._form', ['btn_name' => 'Create'])
            {!! Form::close()  !!}
        </div>
    </div> <!-- row -->

</div>
@endsection