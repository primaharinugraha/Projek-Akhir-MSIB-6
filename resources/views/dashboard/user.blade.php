@extends('dashboard.masterdashboard')
@section('title', 'user')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-2">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">User</a></li>
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
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Profesi</th>
                            <th>Umur</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Actions</th><!-- Add this column -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>jack</td>
                            <td>laki-laki</td>
                            <td>usaha</td>
                            <td>20</td>
                            <td>apake@gmail.com</td>
                            <td>Bandung</td>
                            <td class="">
                              
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button>
                              </a>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Profesi</th>
                            <th>Umur</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
 {{-- modal edit user --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editForm" action="" class="p-2">
          <input type="hidden" name="id" id="edit_id">
          <div class="form-group">
              <label for="edit_nama">Nama</label>
              <input type="text" class="form-control" id="edit_nama" name="nama">
          </div>
          <div class="form-group">
              <label for="edit_gender">Gender</label>
              <input type="text" class="form-control" id="edit_gender" name="gender">
          </div>
          <div class="form-group">
              <label for="edit_profesi">Profesi:</label>
              <input type="text" class="form-control" id="edit_profesi" name="profesi">
          </div>
          <div class="form-group">
              <label for="edit_umur" class="">Umur</label>
              <input type="text" class="form-control" id="edit_umur" name="umur">
          </div>
          <div class="form-group">
              <label for="edit_email">Email</label>
              <input type="email" class="form-control" id="edit_email" name="email">
          </div>
          <div class="form-group">
              <label for="edit_alamat">Alamat</label>
              <input type="text" class="form-control" id="edit_alamat" name="alamat">
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
            </div>
            <!-- /.card-body -->
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection
