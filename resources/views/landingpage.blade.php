@extends('components.template')

@section('title', 'landingpage')
    


 
 @section('content')
 {{-- navbar --}}
 @include('components.navbar')
     {{-- content --}}
     {{-- carousel --}}
     <div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="{{asset('image/1.png')}}" class="d-block w-100 h-50" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="{{asset('image/2.png')}}" class="d-block w-100 h-75" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('image/3.png')}}" class="d-block w-100 h-75" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   
<section class="border-top border-bottom border-black">
<div class="container-fluid">
 <div class="container mt-3 p-4">
   <div class="row" data-aos="zoom-in-up">
       <div class="col-sm-12  col-lg-4 my-4 ">
           <div class="card  custom-shadow">
               <div class="icont ms-3">
                   <div class="card w-25 logo">
                       <i class="fa-regular fa-file-lines fs-1 p-3 d-flex justify-content-center"></i>
                   </div>
               </div>
               <h5 class="fw-bold ms-3">PRODUK</h5>
               <div class="card-body pt-0 ">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptatibus omnis ut perspiciatis veritatis aspernatur sed excepturi ab! Quae, molestiae.</p>
                   <div class="widget-49">
                       <div class="widget-49-meeting-action">
                           <a href="#" class="btn btn-sm btn-flash-border-primary aksi-selanjutnya">Selengkapnya</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-sm-12  col-lg-4 my-4">
           <div class="card  custom-shadow ">
               <div class="icont ms-3">
                   <div class="card w-25 logo">
                       <i class="fa-solid fa-earth-asia fs-1 p-3 d-flex justify-content-center"></i>
                   </div>
               </div>
               <h5 class="fw-bold ms-3">BERITA</h5>
               <div class="card-body pt-0">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptatibus omnis ut perspiciatis veritatis aspernatur sed excepturi ab! Quae, molestiae.</p>
                   <div class="widget-49">
                       <div class="widget-49-meeting-action">
                           <a href="#" class="btn btn-sm btn-flash-border-primary aksi-selanjutnya">Selengkapnya</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-sm-12 col-lg-4 my-4">
           <div class="card  custom-shadow ">
               <div class="icont ms-3">
                   <div class="card w-25 logo">
                       <i class="fa-regular fa-file-lines fs-1 p-3 d-flex justify-content-center"></i>
                   </div>
               </div>
               <h5 class="fw-bold ms-3">TIPS KEUANGAN</h5>
               <div class="card-body pt-0">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptatibus omnis ut perspiciatis veritatis aspernatur sed excepturi ab! Quae, molestiae.</p>
                   <div class="widget-49">
                       <div class="widget-49-meeting-action">
                           <a href="#" class="btn btn-sm btn-flash-border-primary aksi-selanjutnya">Selengkapnya</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
</div>
</section>

<div class="contaner-fluid taglinne py-5" >
<div class="container" >
 <div class="row">
   <div class="col-sm-12 col-lg-8 text-center mb-2" data-aos="fade-right"
   data-aos-offset="220"
   data-aos-easing="ease-in-sine">
     <h1 class="fw-bold">Siap Untuk mengelola Uang Lebih Efisien?</h1>
     <h1 class="fw-bold">Mulai Hitung bersama <span style="color: #00ae86;" class=" fst-italic">SmartMoney</span></h1>
   </div>
   <div class=" col-sm-12 col-lg-4 d-flex inline-block align-items-center gap-3 justify-content-center mb-2" data-aos="zoom-in-up">
     <a href="{{ route('user.signin') }}" class="btn tombolhijau px-4 py-3 custom-shadow" role="button">Get Started</a>
     <a href="" class="btn custom-shadow px-4 py-3 fw-bold bg-white" role="button">Learn More</a>
    </div>
 </div>
</div>
</div>
{{-- content end --}}

@include('components.footer')
 @endsection
 
 