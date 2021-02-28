@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <div class="posts">
        @foreach ($posts_php as $post)
            <div class="post">
                <h2>{{$post['title']}}</h2>
                <p>{{$post['description']}}</p>
            </div>
        @endforeach
    </div>
@endsection