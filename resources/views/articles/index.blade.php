@extends('layouts.master')

@section('head.title')
    Articles
@endsection

@section('body.content')
<div class="container">
    {{-- Start --}}
    @foreach ($articles as $a)
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <h3>{{ $a->title }}</h3>
            <p>{{ $a->content }}</p>
            <p><a href="{{ route('article.show', $a->id) }}">Read more</a></p>
        </div>
    </div>
    @endforeach
    {{-- End --}}
</div>
@endsection