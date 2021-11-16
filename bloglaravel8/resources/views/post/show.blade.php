
@extends('layouts.master')
@section('content')
    <h1>{{$post->title}}</h1>
    <h3>By: {{$post->user->name}}</h3>
    <hr>
    <p>{{$post->content}}</p>

    <div class="comentaris">
        @foreach($post->comments as $comment)

        <div class="comentari">
            <h6>{{$comment->user->name}}</h6>
            <p>{{$comment->comment}}</p>
            @if(Auth::user() != null && Auth::user()->isAdmin())
                <form action="{{route('comment.delete')}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="comment_id" value="{{$comment->id}}">
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <input type="submit" value="Delete">
                </form>
            @endif
        </div>

        @endforeach

        @if(Auth::user() != null)
            <form action="{{route('comment.create')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <label for="comment">Comment:</label><br>
                <textarea id="comment" name="comment" rows="10" cols="50" placeholder="Write a comment"></textarea><br>
                <input type="submit" value="Submit">
            </form>
        @endif
    </div>
@stop
