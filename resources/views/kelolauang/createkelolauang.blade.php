@extends('components.template')

@section('title', 'Create kelola uang')

@section('content')
@include('components.navbar')

<div class="container-fluid py-5" style="background: #ccefe7;">
    <div class="container pt-5">
        <div class="mt-3">
            <a href="{{route('finances.index')}}">
                <button class=" btn btn-danger text-white">
                    Cancel
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </a>
        </div>
        <ul class="m-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <h3 class="text-center mt-3 fw-bold" style="color: #00ae86; ">Buat kelola uang</h3>
        <div class="container d-flex justify-content-center align-items-center">
            <form  action="{{ route('finances.store') }}" method="POST" class="w-50">
                @csrf
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select id="type" class="form-control border border-black" name="type" required>
                        <option value="asset">Asset</option>
                        <option value="liability">Liability</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" class="form-control border border-black" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="mb-3">
                    <label for="value" class="form-label">value</label>
                    <input type="number" id="value" class="form-control border border-black" name="value" value="{{ old('value') }}" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="string" id="date" class="form-control border border-black" name="date" value="{{ old('date') ? old('date') : $year.'-'.$month }}" required>
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