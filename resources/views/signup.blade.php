@extends('components.template')
@section('title', 'Sign Up')

{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar-light shadow p-4 d-flex justify-content-center">
    <h2 class="" href="#"><span>Sign Up <i style=" font-weight: bolder;" class="fa-solid fa-user-plus"></i></span></h2>
  </nav>

{{-- content --}}
<div class="signin">
    <div class="container-fluid py-4  bghijau">
        <div class="container d-flex justify-content-center align-items-center">
           <form class="w-75">
                <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control border border-black" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control border border-black" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control border border-black" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 position-relative">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control border border-black" id="exampleInputPassword1">
                    <i class="fas fa-eye position-absolute mt-2" id="togglePassword" style="cursor: pointer; top: 38px; right: 10px;"></i>
                </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control border border-black" id="exampleInputPassword1">
                       
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#exampleInputPassword1");

        togglePassword.addEventListener("click", function() {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            this.classList.toggle("fa-eye-slash");
        });

        const toggleConfirmPassword = document.querySelector("#toggleConfirmPassword");
        const confirmPassword = document.querySelector("#confirmPassword");

        toggleConfirmPassword.addEventListener("click", function() {
            const type = confirmPassword.getAttribute("type") === "password" ? "text" : "password";
            confirmPassword.setAttribute("type", type);
            this.classList.toggle("fa-eye-slash");
        });
    });
</script>
