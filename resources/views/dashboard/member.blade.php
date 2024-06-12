@extends('dashboard.masterdashboard')
@section('title', 'Member')

@section('content')
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-2">Member</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Member</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
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
                </tr>
                <tr>
                  <td>2</td>
                  <td>jack</td>
                  <td>laki-laki</td>
                  <td>usaha</td>
                  <td>20</td>
                  <td>apake@gmail.com</td>
                  <td>Bandung</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>jack</td>
                  <td>laki-laki</td>
                  <td>usaha</td>
                  <td>20</td>
                  <td>apake@gmail.com</td>
                  <td>Bandung</td>
                </tr>
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
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </section>
    <!-- /.content -->
  </div>
    

     
@endsection