@extends('layouts.default')
@section('title', 'Blog Posts')
@section('content')
  <h1>Blog Posts</h1>
  <ul>
    @forelse ($posts as $post)
      <!-- <li><a href="{{url('/post', $post->id)}}">{{ $post->title }}</a></li> -->
      <li><a href="{{ action('PostController@show', $post}}">{{ $post->title }}</a></li>
    @empty
      <li><a href="">No post yet!!</a></li>
    @endforelse
  </ul>
@endsection
