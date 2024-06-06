@extends('components.template')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light shadow p-4 d-flex justify-content-center">
    <h2 class="" href="#"><span>Sign Up <i style=" font-weight: bolder;" class="fa-solid fa-user-plus"></i></span></h2>
</nav>

{{-- content --}}
<div class="signin">
    <div class="container-fluid py-4 bghijau">
        <div class="container d-flex justify-content-center align-items-center">
            <form action="register_user" method="POST" class="w-75">
                @csrf
                <div class="mb-3">
                    <label for="first_name" class="form-label">First name</label>
                    <input type="text" class="form-control border border-black" id="first_name" name="first_name" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control border border-black" id="last_name" name="last_name" required>
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="number" class="form-control border border-black" id="phone_number" name="phone_number" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control border border-black" id="email" name="email" required>
                </div>
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control border border-black" id="password" name="password" required>
                    <i class="fas fa-eye position-absolute mt-2" id="togglePassword" style="cursor: pointer; top: 38px; right: 10px;"></i>
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control border border-black" id="confirm_password" name="password_confirmation" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn tombolhijau w-50 custom-shadow">Submit</button>
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
@endsection
