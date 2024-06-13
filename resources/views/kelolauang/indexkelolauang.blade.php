@extends('components.template')

@section('title', 'Kelola Uang')

@section('content')

<style>
    .switch-container {
        position: relative;
        border-radius: 3.125em;
        box-shadow: 0 .125em .25em rgba(0, 0, 0, .2);
        overflow: hidden;
        cursor: pointer;
    }
    
    .switch-input {
        -webkit-appearance: none;
        appearance: none;
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }
    
    .switch-button {
        display: inline-flex;
        padding: 0 .375em;
        border-radius: inherit;
        border: .0625em solid #6b717b;
        background-color: #aaafbb;
        box-shadow: inset 0 0 .5em rgba(0, 0, 0, .4);
        transition-property: border-color, background-color;
        transition-duration: .2s;
    }
    
    .switch-input:checked + .switch-button {
        border-color: #00ae86;
        background-color: #00ae86;
    }
    
    .switch-button-inside {
        display: inline-flex;
        column-gap: 1em;
        position: relative;
        border-radius: inherit;
        padding: .75em;
        transform: translateX(-.375em);
        background-image: linear-gradient(90deg, #c5c9d3 48%, #d5d7dd 52%);
        box-shadow: 
            inset .0625em 0 .0625em rgba(255, 255, 255, .4),
            inset -.0625em 0 .0625em rgba(255, 255, 255, .4);
        transition-property: transform;
        transition-duration: .2s;
    }
    
    .switch-button-inside::after {
        content: '';
        position: absolute;
        z-index: -1;
        inset: 0;
        border-radius: inherit;
        background-image: linear-gradient( #00ae86 , #00ae86 );
        box-shadow: 
            inset .0625em 0 .0625em rgba(255, 255, 255, .2),
            inset -.0625em 0 .0625em rgba(255, 255, 255, .2);
        opacity: 0;
        transition-property: opacity;
        transition-duration: .2s;
    }
    
    .switch-input:checked + .switch-button > .switch-button-inside {
        transform: translateX(.375em);
    }
    
    .switch-input:checked + .switch-button > .switch-button-inside::after {
        opacity: 1;
    }
    
    .switch-icon {
        width: 1em;
        height: 1em;
        fill: #fff;
        filter: 
            drop-shadow(0 .0625em .0625em rgba(0, 0, 0, .4))
            drop-shadow(0 0 .25em rgba(255, 255, 255, .4))
            drop-shadow(0 0 .25em rgba(255, 255, 255, .4));
        transition-property: fill;
        transition-duration: .2s;
    }
    
    .switch-icon.off {
        fill: #767c86;
    }
    
    .switch-icon.on {
        
    }
    </style>
@include('components.navbar')

<div class="container-fluid py-5" style="background: #ccefe7;">
    <div class="container pt-5">
        {{-- <div class="d-flex justify-content-start mt-4">
            
            <div class="switch-container">
                <input class="switch-input" type="checkbox">
                <div class="switch-button">
                  <div class="switch-button-inside">
                    <svg class="switch-icon off" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12ZM8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z"/>
                    </svg>
                    <svg class="switch-icon on" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                      <rect x="2" y="7" width="12" height="2" rx="1"/>
                    </svg>
                  </div>
                </div>
              </div>
        </div> --}}
        <div>
                <h2 class="text-center mt-5 fw-bold mb-4" style="color: #00ae86;">Kelola Uang</h2>
                <h2 class=" fw-bold mb-4" style="color: #00ae86;">Hallo Camilla</h2>
                <div class="filter mt-5">
                    <div class="row">
                        <div class="col-lg-6 mt-3 fw-bold">
                            <label for="year">Year</label>
                            <input type="string" name="year" class="datepicker-year  form-input custom-shadow  rounded ms-2" value="{{ isset($year) ? $year : '' }}">
                            <label for="month" class="ms-2">Month</label>
                            <input type="string" name="month" class="datepicker-yearMonth  form-input custom-shadow  rounded ms-2" value="{{ isset($year) && isset($month) ? $year.'-'.$month : '' }}">
                        </div>
                        <div class="col-lg-6 mt-3 ">
                            <a href="" class="btn btn-warning me-3">
                                Reset
                                <i class="fa-solid fa-hand-sparkles"></i>
                            </a>
                            
                    {{-- @php
                        $routeYear = isset($year) ? $year : null;
                        $routeMonth = isset($month) ?  $month : null;
                    @endphp --}}
            {{--         
                    @if(!isset($year))
                        @php
                            $year = $carbon::now()->year;
                        @endphp
                    @endif
                    @if(!isset($month))
                        @php
                            $month = $carbon::now()->month;
                        @endphp
                    @endif --}}
                    <a href="{{route('kelolauang.create')}}" class="btn btn-success text-decoration-none">
                        Add New Finance
                        <i class="fa-solid fa-plus"></i>
                    </a>
                        </div>
                    </div>
                </div>
               
        </div>
        
    
        <h2 class="mt-5 fw-bold mb-4" style="color: #00ae86;">Asset</h2>
        {{-- @if(isset($routeYear) && !isset($routeMonth)) --}}
        <div class="card w-25 mb-5 py-2 custom-shadow">
            <ul class="fw-bold">
                {{-- @foreach($assetsByMonth as $finance) --}}
                    <li>January 2024 | 284y2585</li>
                {{-- @endforeach --}}
                </ul>
                {{-- @endif --}}
        </div>
     
                {{-- table --}}
               <table class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>id</th>
                            <th>Type</th>
                            <th>Nama</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><form action="" method="POST" style="display:inline;">
                                {{-- @csrf
                                @method('DELETE') --}}
                                <button type="submit" class=" btn btn-danger text-white">
                                    Hapus
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="fw-bold text-center">Subtotal Asset</td>
                        </tr>
                    </tbody>
                </table>
                <h2 class="mt-5 fw-bold mb-4" style="color: #00ae86;">Liability</h2>
               
               
                <div class="card card w-25 mb-5 py-2 custom-shadow">
                     {{-- @if(isset($routeYear) && !isset($routeMonth)) --}}
                     <ul class="fw-bold">
                        {{-- @foreach($liabilitiesByMonth as $finance) --}}
                        <li>January 2024 | 284y2585</li>
                        {{-- @endforeach --}}
                    </ul>
                    {{-- @endif --}}
                </div>
  

                <table class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>id</th>
                            <th>Type</th>
                            <th>Nama</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><form action="" method="POST" style="display:inline;">
                                {{-- @csrf
                                @method('DELETE') --}}
                                <button type="submit" class=" btn btn-danger text-white">
                                    Hapus
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="fw-bold text-center">Subtotal Liability</td>
                        </tr>
                    </tbody>
                </table>
                <h2 class="mt-3 fw-bold" style="color: #00ae86;">subtotal Asset-Liability :</h2>
            </div>
            {{-- <div class="col-lg-1">
                <div class="btn btn-light">
                    <a class="nav-link dropdown-toggle fw-bold" style="color: #00ae86;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Pilih Tahun
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">2024</a></li>
                      <li><a class="dropdown-item" href="#">2025</a></li>
                      <li><a class="dropdown-item" href="#">2026</a></li>
                    </ul>
                </div>
            </div> --}}
        {{-- <div class="d-flex justify-content-end">
            <button class="btn text-white fw-bold" style="background:#00ae86; ">Download File</button>
        </div> --}}
    </div>
</div>
@include('components.footer')
{{-- <script>
    document.querySelector('.switch-input').addEventListener('change', () => {
  const audio = new Audio("data:audio/mpeg;base64,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l66A+sBKsb3MK//SnKSoeEbwjlksu4Y6nUw8//swZPsA8awMWfghSAAAAA0gAAABCB0LYeAwQ4gAADSAAAAElUxBTUUzLjEwMFVVVVVVVVVVVVVVgRCAAnmjmEjpMKT//f6oUrbOjqnbawppb6P//2DCQVVMQU1FMy4xMDBVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV//swZPuA8etCV/kBHWAAAA0gAAABBxBTXeA8YoAAADSAAAAEVUxBTUUzLjEwMFVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV//sgZPyA8agY1vgLEKAAAA0gAAABBxDdV+KkToAAADSAAAAEVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVf/7IGT0gPF8JNV4BxHQAAANIAAAAQUcZVOgCSfAAAA0gAAABFVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVX/+xBk9wzxTDJTaCASMgAADSAAAAEDIJ9QQAh2gAAANIAAAARVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVf/7EGTtjfDOL1IYARUQAAANIAAAAQC4ATIAAAAAAAA0gAAABFVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV//sQZN2P8AAAf4AAAAgAAA0gAAABAAAB/gAAACAAADSAAAAEVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVU=");
  audio.play();
  
  if (navigator.vibrate) navigator.vibrate(50);
});
</script> --}}
@endsection
