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
                            <th>Id</th>
                            <th>Email</th>
                            <th>Role</th>
                            {{-- <th>Umur</th>
                            <th>Email</th>
                            <th>Alamat</th> --}}
                            <th>Actions</th><!-- Add this column -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allUsers as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            {{-- <td>20</td>
                            <td>apake@gmail.com</td>
                            <td>Bandung</td> --}}
                            <td class="">
                              
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button>
                              </a>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Id</th>
                            <th>Email</th>
                            <th>Role</th>
                            {{-- <th>Umur</th>
                            <th>Email</th>
                            <th>Alamat</th> --}}
                            <th>Actions</th><!-- Add this column -->
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
            <label for="edit_role" class="">Role</label>
            <select name="role" id="edit_role" class="form-control">
                <option value="" disabled selected>Select Role</option>
                <option value="member">Member</option>
                <option value="admin">Admin</option>
            </select>
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
