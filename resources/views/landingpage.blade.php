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
            <h5>First slide</h5>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="{{asset('image/2.png')}}" class="d-block w-100 h-75" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('image/3.png')}}" class="d-block w-100 h-75" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide</h5>
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
   
<section class="border-top border-bottom border-black" id="news">
  <div class="container-fluid">
    <div class="container mt-3 p-4">
        <div class="row" data-aos="zoom-in-up">
           <div class="col-sm-12 col-lg-4 my-4 ">
              <div class="card  custom-shadow heightcard hovered-card ">
                   <div class="icont ms-3">
                   <div class="card w-25 logo">
                       <i class="fa-regular fa-file-lines fs-1 p-3 d-flex justify-content-center"></i>
                   </div>
               </div>
               <h5 class="fw-bold ms-3">TENTANG KAMI</h5>
               <div class="card-body pt-2 ">
                   <p>SmartMoney adalah platform pengelolaan keuangan sederhana dan mudah digunakan untuk semua usia, dilengkapi berbagai fitur menarik dan nyaman digunakan.</p>
                   <div class="widget-49">
                       <div class="widget-49-meeting-action">
                           <a href="#tentangkami" class="btn btn-sm btn-flash-border-primary aksi-selanjutnya">Selengkapnya</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-sm-12  col-lg-4 my-4">
           <div class="card custom-shadow heightcard hovered-card ">
               <div class="icont ms-3">
                   <div class="card w-25 logo">
                       <i class="fa-solid fa-earth-asia fs-1 p-3 d-flex justify-content-center"></i>
                   </div>
               </div>
               <h5 class="fw-bold ms-3">BERITA</h5>
               <div class="card-body pt-2">
                   <p>TemanKeu mungkin pernah menerima pesan singkat atau panggilan dari orang tak dikenal dengan kata-kata kasar dan mendiskreditkan, tanpa alasan jelas.</p>
                   <div class="widget-49">
                       <div class="widget-49-meeting-action">
                           <a href="https://www.djkn.kemenkeu.go.id/kanwil-jabar/baca-artikel/14040/Menyikapi-Pinjaman-Online-Anugerah-atau-Musibah.html" target="blank" class="btn btn-sm btn-flash-border-primary aksi-selanjutnya">Selengkapnya</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-sm-12 col-lg-4 my-4">
           <div class="card custom-shadow heightcard hovered-card ">
               <div class="icont ms-3">
                   <div class="card w-25 logo">
                    <i class="fa-regular fa-lightbulb fs-1 p-3 d-flex justify-content-center"></i>
                   </div>
               </div>
               <h5 class="fw-bold ms-3">TIPS KEUANGAN</h5>
               <div class="card-body pt-2">
                   <p>Tahun baru membuka peluang baru dalam pengelolaan keuangan. Evaluasi tahun lalu membantu merumuskan strategi yang lebih matang untuk 2024.</p>
                   <div class="widget-49">
                       <div class="widget-49-meeting-action">
                           <a href="https://www.allianz.co.id/explore/10-cara-efektif-mengatur-keuangan-di-tahun-2024.html" target="_blank"class="btn btn-sm btn-flash-border-primary aksi-selanjutnya">Selengkapnya</a>
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
        <div class="container py-5">
           <div class="row">
              <div class="col-sm-12 col-lg-8 text-center mb-2" data-aos="fade-right"
              data-aos-offset="220"
              data-aos-easing="ease-in-sine">
                <h1 class="fw-bold">Siap Untuk mengelola Uang Lebih Efisien?</h1>
                <h1 class="fw-bold">Mulai Hitung bersama <span style="color: #00ae86;" class=" fst-italic">SmartMoney</span></h1>
              </div>
           <div class=" col-sm-12 col-lg-4 d-flex inline-block align-items-center gap-3 justify-content-center mb-2" data-aos="zoom-in-up">
            <a href="{{ route('finances.index') }}" class="btn tombolhijau px-4 py-3 custom-shadow" role="button">Get Started</a>
            <a href="{{route('e-learning')}}" class="btn custom-shadow px-4 py-3 fw-bold bg-white"  role="button">Learn More</a>
            </div>
        </div>
      </div>
    </div>
    {{-- maps --}}
    <div class="container-fluid py-5 border-top border-dark" id="maps">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in-up">
            <div class="card p-3 custom-shadow">
              <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8915647494414!2d107.60514047379051!3d-6.903569067559032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64568e9d7ab%3A0x3dbdedce3b24483d!2sJl.%20Tamansari%20No.1%2C%20Tamansari%2C%20Kec.%20Bandung%20Wetan%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040116!5e0!3m2!1sid!2sid!4v1718217092995!5m2!1sid!2sid"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h1 class="fw-bold text-center py-4"style="color: #00ae86;">Lokasi Kantor <span  class=" fst-italic text-dark">SmartMoney</span></h1>
            <h4 class="text-center">Mari Kunjungi Kantor Kami dan bertemu langsung dengan tim ahli kami. Dapatkan solusi keuangan terbaik yang dirancang khusus untuk kebutuhan Anda, dan mulailah perjalanan menuju kesuksesan finansial bersama kami.</h4>
          </div>
        </div>
      </div>
    </div>

    {{-- tentang kami --}}
    <div class="contaner-fluid taglinne py-5 border-top border-dark" id="tentangkami">
      <div class="container p-4">
        <h1 class="text-center fw-bold" data-aos="fade-right"
        data-aos-offset="220"
        data-aos-easing="ease-in-sine">Tentang <span style="color: #00ae86;" class="">Kami</span></h1>
        <div class="mt-3 bg-dark mx-auto rounded" style="height: 5px;width: 155px"></div>
          <div class="mt-3">
            <h4 class="text-center">SmartMoney hadir sebagai platform pengelolaan keuangan yang sederhana dan mudah digunakan, tanpa batasan usia. Kemudahan yang ditawarkan SmartMoney memungkinkan penggunanya untuk mengelola keuangan dengan nyaman.
              Lebih dari sekadar platform pengelolaan keuangan utama, SmartMoney dilengkapi dengan berbagai fitur menarik, di antaranya:
            </h4>
            <div class="row mt-5"data-aos="zoom-in-up">
              <div class="col-sm-12 col-lg-4 my-4">
                 <div class="card custom-shadow heightcard hovered-card ">
                      <div class="icont ms-3">
                      <div class="card w-25 logo">
                        <i class="fa-solid fa-diagram-project fs-1 p-3 d-flex justify-content-center"></i>
                      </div>
                  </div>
                  <h5 class="fw-bold ms-3">Fitur Proyek</h5>
                  <div class="card-body pt-2 ">
                      <p> Membantu Anda merencanakan dan mengelola keuangan masa depan dengan lebih terarah, efisien, mudah dipahami, serta memberikan hasil yang optimal</p>
                      <div class="widget-49">
                          <div class="widget-49-meeting-action">
                              <a href="{{route('plans.index')}}" class="btn btn-sm btn-flash-border-primary aksi-selanjutnya">Mulai Proyek</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
              <div class="col-sm-12 col-lg-4 my-4">
                 <div class="card  custom-shadow heightcard hovered-card ">
                      <div class="icont ms-3">
                      <div class="card w-25 logo">
                        <i class="fa-solid fa-file-video fs-1 p-3 d-flex justify-content-center"></i>
                      </div>
                  </div>
                  <h5 class="fw-bold ms-3">Fitur E-Learning</h5>
                  <div class="card-body pt-2 ">
                      <p>  Dapatkan wawasan berharga dalam pengelolaan keuangan melalui video edukasi yang dibawakan oleh para profesional di bidang keuangan</p>
                      <div class="widget-49">
                          <div class="widget-49-meeting-action">
                              <a href="{{route('e-learning')}}" class="btn btn-sm btn-flash-border-primary aksi-selanjutnya">Mulai Belajar</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
              <div class="col-sm-12 col-lg-4 my-4">
                 <div class="card  custom-shadow heightcard hovered-card ">
                      <div class="icont ms-3">
                      <div class="card w-25 logo">
                          <i class="fa-solid fa-newspaper fs-1 p-3 d-flex justify-content-center"></i>
                      </div>
                  </div>
                  <h5 class="fw-bold ms-3">Fitur Artikel</h5>
                  <div class="card-body pt-2 ">
                      <p> Temukan informasi terbaru seputar pengelolaan keuangan, isu keuangan, dan studi kasus keuangan untuk menambah pengetahuan dan wawasan Anda.</p>
                      <div class="widget-49">
                          <div class="widget-49-meeting-action">
                              <a href="{{route('article')}}" class="btn btn-sm btn-flash-border-primary aksi-selanjutnya">Lihat Artikel</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

  {{-- content end --}}

@include('components.footer')


 @endsection
 
 