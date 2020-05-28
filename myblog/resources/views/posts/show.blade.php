@extends('layouts.default')

@section('title',$post->title)
@section('content')
  <h1>
    <a href="{{ url('/posts') }}" class="header-menu">Back</a>
    {{ $post->title}}
  </h1>
  <p>{!! nl2br(e($post->body)) !!}</p>

  <h2>Comments</h2>
  <ul>
    @forelse ($post->comments as $comment)
      <!-- <li><a href="{{url('/post', $comment->id)}}">{{-- $post->title --}}</a></li> -->
      <li>
        {{ $comment->body }}
      </li>
    @empty
      <li>No comments yet</li>
    @endforelse
  </ul>
@endsection
