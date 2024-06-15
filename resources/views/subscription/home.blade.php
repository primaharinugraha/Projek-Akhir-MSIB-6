@extends('components.template')

@section('title', 'subcription')
    
@section('content')
@include('components.navbar')


<div class="container-fluid py-5 mt-5">
    <div class="container mt-5 d-flex justify-content-center">
        @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="card p-4 w-50 custom-shadow" style="background: #ccefe7; ">
    <h2 class="text-center">Berlangganan</h2>
    <h5 class="mt-3">Dengan berlangganan anda bisa mengakses berbagai fitur, yaitu :</h5>
    <ul>
        <li>Akses Pengelolaan Keuangan</li>
        <li>Akses Seluruh Video</li>
        <li>Artikel</li>
        <li>Proyek Tanpa Batasan</li>
    </ul>
    
   <h5 class="mt-3">Status Berlangganan: {{ auth()->user()->profile->premium ? "Ya" : "Tidak" }}</h5> 

    @if(auth()->user()->profile->premium)
    <form method="post" action="{{ route('subscription.cancel') }}" class="mt-3">
        @csrf
        <button type="submit" class="btn btn-danger rounded">
            unsubscribe
            <i class="fa-solid fa-xmark"></i>
        </button>
    </form>
    @else
    <form method="post" action="{{ route('subscription.subscribe') }}" class="mt-3">
        @csrf
        <button type="submit" class="btn btn-success rounded">
            Subscribe
            <i class="fa-solid fa-money-check-dollar"></i>
        </button>
    </form>
    @endif
</div>
      
    </div>
</div>
@include('components.footer')
@endsection

