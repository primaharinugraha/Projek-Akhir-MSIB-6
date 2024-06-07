@extends('components.template')

@section('title', 'Sign In')

{{-- navbar --}}
@include('components.navbar')

@section('content')
<div class="signin">
    <div class="container-fluid py-4 bghijau mt-5">
        <div class="container d-flex justify-content-center align-items-center">
            <form class="w-75">
                <h2 class="mb-4 text-center mt-5">Sign In</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control border border-black" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 position-relative">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control border border-black" id="exampleInputPassword1">
                    <i class="fas fa-eye position-absolute mt-2" id="togglePassword" style="cursor: pointer; top: 38px; right: 10px;"></i>
                    <div class="form-text my-4 fs-5 fw-bold">Forgot Password?</div>
                </div>
                <button type="submit" class="btn tombolhijau w-100 custom-shadow">Login</button>
                <div class="form-text my-4 fs-5 fw-bold">
                    Don't Have Account? <a href="{{ route('user.signup') }}" class="text-decoration-none text-dark">Create Here</a>
                </div>
            </form>
        </div>
    </div>
    <div class="">
        @include('components.footer')
    </div>
</div>

{{-- content end --}}

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#exampleInputPassword1");

        togglePassword.addEventListener("click", function() {
            // Toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // Toggle the eye icon
            this.classList.toggle("fa-eye-slash");
        });
    });
</script>
@endsection