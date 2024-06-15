<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    @can('create', \App\Models\Post::class)
        <a href="{{ route('posts.create') }}">Create Post</a>
    @endcan
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                @can('update', $post)
                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                @endcan
                @can('delete', $post)
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                @endcan
            </li>
        @endforeach
    </ul>
</body>
</html>
