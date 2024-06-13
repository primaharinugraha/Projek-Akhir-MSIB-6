@extends('components.template')

@section('title', 'Show Proyek')

@section('content')
@include('components.navbar')

<div class="container-fluid py-5" style="background: #ccefe7;">
    <div class="container pt-5">
        <div class="mt-3">
            <a href="{{ route('proyek') }}">
                <button class="btn btn-success text-white">
                    Back to Proyek
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <div class="proyek-details card p-3 mt-4 w-50 custom-shadow" style="background:#ccefe7 ">
                <h3 class="fw-bold"style="color: #00ae86;">Name Proyek</h1>
                <p><strong>Target uang yang dikumpulkan:</strong> Rp. </p>
                <p><strong>Tanggal mulai:</strong> </p>
                <p><strong>Tanggal berakhir:</strong> </p>
                <p><strong>Cicilan perbulan:</strong> Rp. </p>
            </div>
        </div>
    </div>
</div>

@include('components.footer')
@endsection
