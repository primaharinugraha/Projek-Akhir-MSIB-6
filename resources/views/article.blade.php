@extends('components.template')

@section('title', 'Article')

@section('content')

 {{-- navbar --}}
 @include('components.navbar')

 <div class="container-fluid py-5 mt-4" style="background: #ccefe7;">
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card shadow p-2 rounded">
                <img src="https://www.djkn.kemenkeu.go.id/files/images/2021/07/fintech.jpeg" alt="" class="img-fluid w-100 rounded " style="height: 350px;">
            </div>
            
        </div>
        <div class="col-lg-8">
            <h5 class="fw-bold text-muted mt-3">Articel Post</h5>
            <h2 class="fw-bold">Menyikapi Pinjaman Online, Anugrah atau Musibah</h2>
            <p class="fw-bold text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quae animi explicabo doloremque molestias tempore vitae veniam, quisquam sunt, harum provident nostrum error esse corporis voluptate eos amet dignissimos beatae dolores odit eveniet vel culpa! Magnam officiis voluptate, possimus vero repudiandae ex modi voluptatum aliquam laudantium a molestias sapiente fugit autem id praesentium consequatur veritatis laborum ratione, facilis, suscipit iure blanditiis ducimus assumenda minima? Quod consequuntur doloribus aliquam dolorem minus!</p>
            <h5 class="fw-bold text-muted">05 Juli 2024</h5>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card shadow p-2 rounded">
            <img src="https://cdn.cnbcindonesia.com/cnbc/images/default.jpg" alt="" class="img-fluid w-100 rounded"style="height: 350px;">
        </div>
        </div>
        <div class="col-lg-8">
            <h5 class="fw-bold text-muted mt-3">Articel Post</h5>
            <h2 class="fw-bold">Menyikapi Pinjaman Online, Anugrah atau Musibah</h2>
            <p class="fw-bold text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quae animi explicabo doloremque molestias tempore vitae veniam, quisquam sunt, harum provident nostrum error esse corporis voluptate eos amet dignissimos beatae dolores odit eveniet vel culpa! Magnam officiis voluptate, possimus vero repudiandae ex modi voluptatum aliquam laudantium a molestias sapiente fugit autem id praesentium consequatur veritatis laborum ratione, facilis, suscipit iure blanditiis ducimus assumenda minima? Quod consequuntur doloribus aliquam dolorem minus!</p>
            <h5 class="fw-bold text-muted">05 Juli 2024</h5>
        </div>
    </div>
 </div>
 @include('components.footer')
@endsection