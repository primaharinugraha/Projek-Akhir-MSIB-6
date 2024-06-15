{{-- navbar --}}
@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light shadow p-4 fixed-top bg-white fw-semibold ">
  <a class="navbar-brand ms-2 d-flex align-items-center" href="">
    {{-- <img src="{{ asset('image/logosmartmoney.jpeg') }}?v=1" alt="Logo Smart Money" style="width: 125px; height: auto;" class="ms-3 d-inline-block align-text-top"> --}}
    <span class="d-flex align-items-center fs-4 fst-italic " style=" color: #00ae86;">SMART<span class="text-secondary ms-1"> MONEY</span>
      {{-- <i class="fa-solid fa-sack-dollar fs-2 "></i> --}}
    </span>
  </a>
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mb-2 mb-lg-0 gap-3"> 
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'activenavbar' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fitur
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('finances.index')}}">Kelola Uang</a></li>
            <li><a class="dropdown-item" href="{{route('plans.index')}}">Proyek</a></li>
            <li><a class="dropdown-item" href="{{ route('e-learning')}}">E-learning</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'article' ? 'activenavbar' : '' }}" href="{{ route('article') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Kontak</a>
        </li>
      </ul>
      <div class=" search d-flex ms-auto me-2 gap-3" role="search">
        <i class="fa fa-search"></i>
        <input type="text" id="searchInput" class="form-control form-input custom-shadow border-secondary" placeholder="Search ...">
        @guest
        {{-- jika user belum login maka yang muncul button signup --}}
        <a class="btn tombolhijau custom-shadow py-2 w-50" href="{{ route('register')}}" type="submit">Register</a>
        {{-- jika sudah login yang muncul profile user --}}
        @endguest
        @auth
        <div class="nav-item dropdown mt-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hallo, {{Auth::user()->profile->name}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href=" {{route('profiles.edit', auth()->user()->id)}} ">Lihat Profil</a></li>
              <li>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
              </li>
              <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a></li>
      </div>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
          </ul>
        </div>
         {{-- parsing kesinni --}}
         @if(Auth::user()->profile->photo_path)
         <img src="{{ asset('storage/' . Auth::user()->profile->photo_path) }}" alt="User Photo" class="img-fluid rounded-circle" style="height: 40px; width:40px;">
         @endif
         @endauth
      </div>

    </div>
  </div>
</nav>
@show
{{-- navbar-end --}}
