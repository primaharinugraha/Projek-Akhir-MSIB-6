<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <ul class="m-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <form action="{{ route('posts.update', ['post' => $post]) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="title">name</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <div>
            <label for="category">Category</label>
            <select id="category" name="category"  required>
                <option value="fundamental" @if($post->category == 'fundamental') selected @endif>Fundamental</option>
                <option value="intermediate" @if($post->category == 'intermediate') selected @endif>Intermediate</option>
                <option value="advanced" @if($post->category == 'advanced') selected @endif>Advanced</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label fw-semibold">Image</label>
            <img src="{{ url('storage', $post->image_path) }}">
            <input type="file" class="form-control {{$errors->get('image') ? "is-invalid" : ""}}" name="image" id="image">
        </div>

        <label for="text">Text</label>
        <textarea name="text" id="text">{{ $post->text }}</textarea>
        @error('text')
            <p>{{ $message }}</p>
        @enderror

        <div class="form-check">
            <input type="hidden" name="premium" value="0">
            <input class="form-check-input" type="checkbox" name="premium" value="1" @if($post->premium) checked @endif/>
            <label class="form-check-label">Premium</label>
        </div>

        <button type="submit">Submit</button>
    </form>

    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#text'), {
                mediaEmbed: {
                    previewsInData:true
                },
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>
</html>
