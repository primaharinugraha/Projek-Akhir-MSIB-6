@extends('components.template')
@section('title', 'Register')



{{-- content --}}
@section('content')
{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar-light shadow p-4 d-flex justify-content-center">
    <h2 class="" href="#"><span>Register <i style=" font-weight: bolder;" class="fa-solid fa-user-plus"></i></span></h2>
</nav>
<div class="signin">
    <div class="container-fluid py-4  bghijau">
        <div class="container d-flex justify-content-center align-items-center">
           <form id="signupForm" class="w-75">
                <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control border border-black" id="name" name="name" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control border border-black" id="phone" name="phone" aria-describedby="phoneHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control border border-black" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control border border-black" id="password" name="password">
                    <i class="fas fa-eye position-absolute mt-2" id="togglePassword" style="cursor: pointer; top: 38px; right: 10px;"></i>
                </div>
                    <div class="mb-3 position-relative">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control border border-black" id="password_confirmation" name="password_confirmation">
                        <i class="fas fa-eye position-absolute mt-2" id="togglekonfirmasiPassword" style="cursor: pointer; top: 38px; right: 10px;"></i>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn tombolhijau w-50 custom-shadow p-3 fw-bold fs-5">Submit</button>
                    </div>
                </form>
           </div>
    </div>
</div>
{{-- content end --}}

<footer class="footer bg-white border-top border-black p-3">
    <div class="container mt-3">
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        // Toggle password visibility
        $('#togglePassword').on('click', function() {
            const type = $('#password').attr('type') === 'password' ? 'text' : 'password';
            $('#password').attr('type', type);
            $(this).toggleClass('fa-eye-slash');
        });

        $('#togglekonfirmasiPassword').on('click', function() {
            const type = $('#password_confirmation').attr('type') === 'password' ? 'text' : 'password';
            $('#password_confirmation').attr('type', type);
            $(this).toggleClass('fa-eye-slash');
        });

    });
</script>
@endsection