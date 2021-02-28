@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <div class="posts">
        @foreach ($posts as $post)
            <div class="post">
                <h2>{{$post->title}}</h2>
                <p>{{$post->body}}</p>
            </div>
        @endforeach
    </div>
@endsection