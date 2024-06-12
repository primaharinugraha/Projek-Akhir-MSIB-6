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
                            <th>tanggal</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td> <img src="https://cdn.cnbcindonesia.com/cnbc/images/default.jpg" alt="" class="img-fluid  rounded" style="width: 70px; height:40px;"></td>
                            <td>apake</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, error!</td>
                            <td>20 agustus 2024</td>
                            <td class="">
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button>
                              </a>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>image</th>
                            <th>judul</th>
                            <th>content</th>
                            <th>tanggal</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
 {{-- modal edit article --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Article</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editForm" action="" enctype="" class="p-2">
          <input type="hidden" name="id" id="edit_id">
          <div class="form-group">
              <label for="edit_image">Image</label>
              <input type="file" class="form-control" id="edit_image" name="image">
          </div>
          <div class="form-group">
              <label for="edit_content">content</label>
              <input type="text" class="form-control" id="edit_content" name="content">
          </div>
          <div class="form-group">
              <label for="edit_profesi">Tanggal</label>
              <input type="date" class="form-control" id="edit_profesi" name="profesi">
          </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
{{-- modal create Article --}}
 <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create Article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createForm" action="" enctype="" class="p-2">
                    <div class="form-group">
                        <label for="create_image">Image</label>
                        <input type="file" class="form-control" id="create_image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="create_content">Content</label>
                        <input type="text" class="form-control" id="create_content" name="content">
                    </div>
                    <div class="form-group">
                        <label for="create_tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="create_tanggal" name="tanggal">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create</button>
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
