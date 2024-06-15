@extends('components.template')

@section('title', 'Login')

{{-- navbar --}}
@include('components.navbar')

@section('content')
<div class="signin">
    <div class="container-fluid py-5 bghijau mt-5">
        <div class="container d-flex justify-content-center align-items-center">
            <form  action="{{ route('authenticate') }}" method="POST" class="w-75">
                @csrf
                <h2 class="mb-4 text-center mt-5">Login</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control border border-black" id="email" name="email" aria-describedby="emailHelp">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3 position-relative">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control border border-black" id="password" name="password">
                    <i class="fas fa-eye position-absolute mt-2" id="togglePassword" style="cursor: pointer; top: 38px; right: 10px;"></i>
                </div>
                <button type="submit" class="btn tombolhijau w-100 custom-shadow p-3 fw-bold fs-5 mt-5">Login</button>
                <div class="form-text my-4 fs-5 fw-bold">
                    Don't Have Account? <a href="{{ route('register') }}" class="text-decoration-none text-dark">Create Here</a>
                </div>
            </form>
        </div>
    </div>
    <div class="">
        @include('components.footer')
    </div>
</div>

{{-- content end --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#togglePassword').on('click', function() {
            const type = $('#password').attr('type') === 'password' ? 'text' : 'password';
            $('#password').attr('type', type);
            $(this).toggleClass('fa-eye-slash');
        });
    });
</script>
@endsection