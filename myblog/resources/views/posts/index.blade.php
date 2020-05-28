@extends('layouts.default')
@section('title', 'Blog Posts')
@section('content')
  <h1>
  <a href="{{ url('/posts/create') }}" class="header-menu">new Post</a>
  Blog Posts
</h1>
  <ul>
    @forelse ($posts as $post)
      <!-- <li><a href="{{url('/post', $post->id)}}">{{-- $post->title --}}</a></li> -->
      <li>
        <a href="{{ action('PostController@show', $post) }}">{{ $post->title }}</a>
        <a href="{{ action('PostController@edit', $post) }}" class="edit">[Edit]</a>
        <a href="#" class="del" data-id="{{ $post->id }}">[x]</a>
        <form action="{{ url('/posts', $post->id) }}" method="POST" id="form_{{ $post->id }}">
          {{csrf_field()}}
          {{ method_field('delete') }}
        </form>
      </li>
    @empty
      <li><a href="">No post yet!!</a></li>
    @endforelse
  </ul>
  <script src="/js/main.js"></script>
@endsection
