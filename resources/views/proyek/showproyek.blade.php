@extends('components.template')

@section('title', 'Show Proyek')

@section('content')
@include('components.navbar')

<div class="container-fluid py-5" style="background: #ccefe7;">
    <div class="container pt-5">
        <div class="mt-3">
            <a href="{{ route('plans.index') }}">
                <button class="btn btn-success text-white">
                    Back
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <div class="proyek-details card p-3 mt-4 w-50 custom-shadow" style="">
                <h3 class="fw-bold"style="color: #00ae86;">{{ $plan->name }}</h1>
                <p><strong>Target uang yang dikumpulkan: Rp.{{ number_format($plan->goal, 0, ',', '.') }}</strong></p>
                <p><strong>Tanggal mulai: {{ $plan->start_date }}</strong> </p>
                <p><strong>Tanggal berakhir: {{ $plan->date }}</strong> </p>
                <p><strong>Cicilan perbulan: Rp. {{ number_format($installment, 2, ',', '.') }}</strong></p>
            </div>
        </div>
    </div>
</div>

@include('components.footer')
@endsection
