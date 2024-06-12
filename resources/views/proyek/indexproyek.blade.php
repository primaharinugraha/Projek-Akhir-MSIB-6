@extends('components.template')

@section('title', 'proyek')

@section('content')
@include('components.navbar')

<div class="container-fluid py-5" style="background: #ccefe7;">
    <div class="container pt-5">
        <h3 class="text-center mt-5 fw-bold" style="color: #00ae86; ">Proyek</h3>
        <div class="d-flex justify-content-start gap-3 mt-5">
            <a href="{{route('create.proyek')}}">
                <button type="submit" class=" btn text-white" style="background: #00ae86;">
                    Buat
                    <i class="fa-solid fa-plus"></i>
                </button>
            </a>
           
            <button type="submit" class=" btn btn-danger text-white">
                Hapus
                <i class="fa-solid fa-trash-can"></i>
            </button>
        </div>
    </div>
</div>
@include('components.footer')
@endsection