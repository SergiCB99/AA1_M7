
@extends('layouts.master')
@section('content')

    <h1>Posts</h1>

        @foreach($posts as $post)
            <div class="post">
                <h3><a href="{{route('post.show',['id'=>$post->id])}}">{{$post->title}}</a></h3>
                <hr>
                <p>{{$post->user->name}}</p>
            </div>

        @endforeach
        <div>{{$posts->links()}}</div>

@stop
