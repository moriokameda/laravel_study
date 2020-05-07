<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
  public function index() {
    // $posts = Post::orderBy('Created_at', 'desc')
    $posts = Post::latest()->get();
    dd($posts->toArray());
    return view('posts.index');
  }
}
