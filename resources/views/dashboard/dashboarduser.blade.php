@extends('dashboard.masterdashboard')
@section('title', 'dashboaruser')
    


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-2">Hallo, {{Auth::user()->profile->name}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Index</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $plansCount }}<sup style="font-size: 20px"></sup></h3>
                <p>Data Proyek</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('dataproyek.dashboard')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $liabilitiesTotal }}</h3>
                <p>Total Perhitungan Liabilities</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-calculator"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $assetsTotal }}</h3>
                <p>Total Perhitungan Asset</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>

              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark-subtle">
              <div class="inner">
                <h3>{{ $financesTotal }}</h3>
                <p>Total Asset Liabilities</p>
              </div>
              <div class="icon">
                <i class="ion ion-card"></i>
               </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $assetsCount }}</h3>
                <p>Jumlah Aset</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
               </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $liabilitiesCount }}</h3>
                <p>Jumlah Liabilities</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-calculator"></i>
               </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4 class="my-3">Asset/Bulan</h4>
                    <table class="table table-bordered mt-5">
                        <thead>
                            <tr>
                                <th>Month</th>
                                <th>Sum</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($assetsByMonth as $month => $data)
                                <tr>
                                    <td>{{ $month }}</td>
                                    <td>{{ number_format($data->sums, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <p>Total Perhitungan Asset Perbulan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-calendar"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h4 class="my-3">Liabilities/Bulan</h5>
                    <table class="table table-bordered mt-5">
                        <thead>
                            <tr>
                                <th>Month</th>
                                <th>Sum</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($liabilitiesByMonth as $month => $data)
                                <tr>
                                    <td>{{ $month }}</td>
                                    <td>{{ number_format($data->sums, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <p>Total Perhitungan Liabilities Perbulan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-calendar"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
           
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
    
            <!-- Map card -->
    
            <!-- /.card -->
    
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div>
    </section>
    
    <!-- /.content -->
  </div>
@endsection