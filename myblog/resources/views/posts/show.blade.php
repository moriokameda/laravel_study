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
        <a href="#" class="del" data-id="{{ $comment->id }}">[x]</a>
        <form action="{{ action('CommentsController@destroy', [$post, $comment]) }}" method="POST" id="form_{{ $comment->id }}">
          {{csrf_field()}}
          {{ method_field('delete') }}
        </form>
      </li>
    @empty
      <li>No comments yet</li>
    @endforelse
  </ul>
  <form action="{{ action('CommentsController@store', $post) }}" method="POST">
  {{ csrf_field()}}
  <p><input type="text" name="body" placeholder="enter comment" value="{{ old('body') }}">
    @if ($errors->has('body'))
      <span class="error"> {{ $errors->first('title') }}</span>
    @endif
  </p>
    @if ($errors->has('body'))
      <span class="error"> {{ $errors->first('body') }}</span>
    @endif
  </p>
  <p><input type="submit" value="Add Comment"></p>
</form>
<script src="/js/main.js"></script>
@endsection
