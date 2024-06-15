@extends('components.template')

@section('title', 'Create Proyek')

@section('content')
@include('components.navbar')

<div class="container-fluid py-5" style="background: #ccefe7;">
    <div class="container pt-5">
        <div class="mt-3">
            <a href="{{route('plans.index')}}">
                <button class=" btn btn-danger text-white">
                    Cancel
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </a>
        </div>
        <h3 class="text-center mt-3 fw-bold" style="color: #00ae86; ">Buat Proyek</h3>
        <div class="container d-flex justify-content-center align-items-center">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form  action="{{ route('plans.store') }}" method="POST" class="w-50">
                @csrf
                <div class="mb-3">
                    <label for="nama_proyek" class="form-label">Nama Proyek</label>
                    <input type="text" class="form-control border border-black" id="name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="mb-3">
                    <label for="Tujuan" class="form-label">Uang yang akan di kumpulkan (Tujuan)</label>
                    <input type="text" class="form-control border border-black" id="goal" name="goal" value="{{ old('goal') }}" required>
                </div>
                <div class="mb-3">
                    <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
                    <input type="date" class="form-control border border-black" id="start_date" name="start_date" value="{{ old('start_date') }}" required>
                </div>
                <div class="mb-3">
                    <label for="batas_waktu" class="form-label">Batas Waktu</label>
                    <input type="date" class="form-control border border-black" id="date" name="date" value="{{ old('date') }}" required>
                </div>
                <div class="mt-5">
                        <button type="submit" class=" btn text-white w-100" style="background: #00ae86;">
                            Buat
                            <i class="fa-solid fa-plus"></i>
                        </button>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
@include('components.footer')
@endsection