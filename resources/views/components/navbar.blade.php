{{-- navbar --}}
@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light shadow p-3 fixed-top bg-white fw-semibold ">
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
          <a class="nav-link activenavbar" href="{{ route('user.home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fitur
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Fitur 1</a></li>
            <li><a class="dropdown-item" href="#">Fitur 2</a></li>
            <li><a class="dropdown-item" href="#">Fitur 3</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Karir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="form d-flex ms-auto gap-3" role="search">
        <i class="fa fa-search"></i>
        <input type="text" class="form-control form-input custom-shadow border-secondary" placeholder="Search ...">
        <button class="btn tombolhijau custom-shadow px-1 w-50" type="submit">Sign Up</button>
      </form>
    </div>
  </div>
</nav>
@show
{{-- navbar-end --}}
