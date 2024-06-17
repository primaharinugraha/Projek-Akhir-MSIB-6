@extends('components.template')

@section('title', 'Article')

@section('content')

 {{-- navbar --}}
 @include('components.navbar')

 <div class="container-fluid py-5 mt-4" style="background: #ccefe7;">
    @foreach($posts as $post)
    <div class="row mt-5">
        <div class="col-lg-4">
            {{-- image --}}
            <div class="card shadow p-2 rounded">
                <img src="{{ Storage::url($post->image_path) }}" alt="" class="img-fluid w-100 rounded" style="height: 300px;">
            </div>
        </div>
        <div class="col-lg-8">
            <h5 class="fw-bold text-muted mt-3">Article Post</h5>
            {{-- title --}}
            <h2 class="fw-bold">{{ $post->title }}</h2>
            {{-- content --}}
            <p class="fw-bold text-muted">{{ $post->text }}</p>
            {{-- created at --}}
            <h5 class="fw-bold text-muted">{{ $post->created_at->format('d M Y') }}</h5>
        </div>
    </div>
    @endforeach
 </div>
 @include('components.footer')
@endsection