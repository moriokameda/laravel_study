<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Post</title>
</head>
<body>
  <div class="container">
    <h1>Blog Posts</h1>
    <ul>
      @forelse ($posts as $post)
        <li><a href="">{{ $post->title }}</a></li>
      @empty
        <li><a href="">No post yet!!</a></li>
      @endforelse
    </ul>
  </div>
</body>
</html>
