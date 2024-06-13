<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">name</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <div>
            <label for="category">Category</label>
            <select id="category" name="category"  required>
                <option value="fundamental">Fundamental</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label fw-semibold">Image</label>
            <input type="file" class="form-control {{$errors->get('image') ? "is-invalid" : ""}}" name="image" id="image">
        </div>

        <label for="text">Text</label>
        <textarea name="text" id="text">{{ old('text') }}</textarea>
        @error('text')
            <p>{{ $message }}</p>
        @enderror

        <div class="form-check">
            <input type="hidden" name="premium" value="0">
            <input class="form-check-input" type="checkbox" name="premium" value="1" />
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
