@extends('dashboard.masterdashboard')
@section('title', 'Data Proyek')

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.49.1/apexcharts.min.js" integrity="sha512-qiVW4rNFHFQm0jHli5vkdEwP4GPSzCSp85J7JRHdgzuuaTg31tTMC8+AHdEC5cmyMFDByX639todnt6cxEc1lQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.49.1/apexcharts.min.css" integrity="sha512-LJwWs3xMbOQNFpWVlpR0Dv3ND8TQgLzvBJsfjMcPKax6VJQ8p9WnQvB5J5Lb9/0D31cbnNsh9x5Lz6+mzxgw1g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var color = '#3366CC';  // Warna biru yang dipilih

var options = {
  series: [{
    data: [21, 22, 10, 28, 16, 21, 13, 30, 25, 18, 27, 15] // Data contoh untuk setiap bulan
  }],
  chart: {
    height: 350,
    type: 'bar',
    events: {
      click: function(chart, w, e) {
        // console.log(chart, w, e)
      }
    }
  },
  colors: [color],  // Menggunakan satu warna saja
  plotOptions: {
    bar: {
      columnWidth: '45%',
      distributed: true,
    }
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    show: false
  },
  xaxis: {
    categories: [
      'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 
      'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
    ],
    labels: {
      style: {
        colors: color,  // Menggunakan satu warna untuk label
        fontSize: '12px'
      }
    }
  }
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();


    var options = {
          series: [50, 25, 25],
          chart: {
          width: 380,
          type: 'pie',
        },
        labels: ['2024', '2025', '2026'],
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chartss"), options);
        chart.render();
  });
</script>
@endsection

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-2">Data Proyek</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Data Proyek</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="card w-75 shadow">
              <div class="d-flex justify-content-center mt-2">
                @if(Auth::user()->profile->premium == 1)
                <h3 class="text-center btn btn-info w-50 rounded-fill">Berlangganan</h3>
            @else
                <h3 class="text-center btn btn-info w-50 rounded-fill"> Non Berlangganan</h3>
            @endif
              </div>
             <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="data:image/jpeg;base64,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" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <h4 class="d-block fw-bold">{{Auth::user()->profile->name}}</h4>
                  <h5>{{Auth::user()->profile->job}}</h5>
                </div>
              </div>
            </div>
            {{-- filter tahun --}}

            {{-- diagram batang --}}
            <div class="card mt-5">
              <div class="card-body">
                <h5 class="fw-bold text-center">Asset Bersih</h5>
                <div id="chart"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            {{-- diagram pie --}}
            <div class="card">
              <div class="card-body">
                <h5 class="fw-bold text-center">Proyek</h5>
                <div id="chartss"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

     
@endsection