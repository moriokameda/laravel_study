<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
  public function index() {
    // $posts = Post::orderBy('Created_at', 'desc')
    $posts = Post::latest()->get();
    // dd($posts->toArray());
    // return view('posts.index', ['posts' => $posts]);
    return view('posts.index')->with('posts', $posts);// 上と同じ意味
  }

  public function show(Post $post) {
    // $post = Post::findOrFail($id);
    return view('posts.show')->with('post', $post);
  }
}
