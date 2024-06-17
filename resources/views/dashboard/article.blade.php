@extends('dashboard.masterdashboard')
@section('title', 'Article')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-2">Article</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Article</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#createModal">Create Article</button>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>image</th>
                            <th>judul</th>
                            <th>content</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ Storage::url($post->image_path) }}" alt="" class="img-fluid rounded" style="width: 70px; height:40px;"></td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->text }}</td>
                            <td>
                               <div class="d-flex ">
                                 <!-- Tombol Edit -->
                                 <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal-{{ $post->id }}">Edit</button>
                                
                                 <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-danger">
                                         Delete
                                     </button>
                                 </form>
                               </div>
                            </td>
                        </tr>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal-{{ $post->id }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $post->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel-{{ $post->id }}">Edit Article</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="editForm-{{ $post->id }}" action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="p-2">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="edit_image-{{ $post->id }}">Image</label>
                                                <input type="file" class="form-control" id="edit_image-{{ $post->id }}" name="image">
                                            </div>
                                            <div class="form-group">
                                                <label for="edit_content-{{ $post->id }}">Content</label>
                                                <textarea class="form-control" name="text" id="edit_content-{{ $post->id }}">{{ $post->text }}</textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>image</th>
                            <th>judul</th>
                            <th>content</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>

                {{-- modal create Article --}}
                <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel">Create Article</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="createForm" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="p-2">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="create_image">Image</label>
                                        <input type="file" class="form-control" id="create_image" name="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="create_content">Content</label>
                                        <textarea class="form-control" name="text" id="text">{{ old('text') }}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
