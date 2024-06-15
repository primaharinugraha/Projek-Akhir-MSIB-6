<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <img src="{{ url('storage', $post->image_path) }}">
    <p>{{ $post->category }}</p>
    <p>{{ $post->premium }}</p>
    <p>{!! $post->text !!}</p>
    <a href="{{ route('posts.index') }}">Back to Posts</a>
</body>
</html>
