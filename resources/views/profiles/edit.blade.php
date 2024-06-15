@extends('components.template')

@section('title', 'profile')

@section('content')
    {{-- navbar --}}
    @include('components.navbar')
    <div class="container-fluid py-5" style="background: #ccefe7;">
        <div class="icont-back pt-5 mt-2">
            <a href="{{ route('home') }}" class="text-decoration-none text-dark fs-1">
                <i class="fa-regular fa-circle-left"></i>
            </a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="profile-image d-flex justify-content-center py-1">
            <img src="{{ $user->profile->photo_path ? url('storage', $user->profile->photo_path) : asset('image/defaultprofile.jfif') }}" class="img-fluid rounded-circle" alt="Profile Image" style="height:300px; width:300px;">
        </div>
        <h2 class="text-center mt-3" style="color:  #00ae86;">Profile</h2>
        <div class="container mt-5">
            <form action="{{ route('profiles.update', ['user' => $user ]) }}" class="fw-bold ms-5" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="file" name="photo" id="file-input" class="d-none">
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control border border-black w-75" id="name"
                                name="name" value="{{ $user->profile->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <div>
                                <input type="radio" name="gender" id="gender" value="Laki-laki" @if($user->profile->gender == 'Laki-laki') checked @endif>
                                <label for="male" class="ms-2">Laki-laki</label>
                            </div>
                            <div class="mt-2">
                                <input type="radio" name="gender" id="gender" value="Perempuan" @if($user->profile->gender == 'Perempuan') checked @endif>
                                <label for="female" class="ms-2">Perempuan</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="source_income" class="form-label">Sumber Penghasilan</label>
                            <input type="text" class="form-control border border-black w-75" id="source_income"
                                name="source_income" value="{{ $user->profile->source_income }}">
                        </div>
                        <div class="mb-3">
                            <label for="profesi" class="form-label">Profesi</label>
                            <input type="text" class="form-control border border-black w-75" id="job"
                                name="job" value="{{ $user->profile->job }}"> 
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="premium" class="form-label">Status Member</label>
                            <div>
                                <input type="hidden" name="premium" value="0">
                                <input class="form-check-input" type="checkbox" name="premium" value="1" @if($user->profile->premium) checked @endif />
                                <label class="form-check-label">Berlangganan</label>
                            </div>
                        </div>
                        <div class="mt-5">
                            <label for="negara" class="form-label">Negara</label>
                            <input type="text" class="form-control border border-black w-75" id="country"
                                name="country" value="{{ $user->profile->country }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="umur" class="form-label">Umur</label>
                            <input type="number" class="form-control border border-black w-75" id="age"
                                name="age" value="{{ $user->profile->age }}">
                        </div>
                        <div class="mb-3">
                            <label for="married_status" class="form-label">Status</label>
                            <div>
                                <input type="radio" name="married_status" id="married_status" value="Lajang" @if($user->profile->married_status == 'Lajang') checked @endif>
                                <label for="lajang" class="ms-2">Lajang</label>
                            </div>
                            <div class="mt-2">
                                <input type="radio" name="married_status" id="married_status" value="Menikah" @if($user->profile->married_status == 'Menikah') checked @endif>
                                <label for="menikah" class="ms-2">Menikah</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                            <input type="text" class="form-control border border-black w-75" id="last_education"
                                name="last_education" value="{{ $user->profile->last_education }}">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="text" class="form-control border border-black w-75" id="email"
                                name="email" value="{{ $user->email }}">
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control border border-black w-75" id="address"
                                name="address" value="{{ $user->profile->address }}">
                        </div>
                        <div class="">
                            <label for="kode_pos" class="form-label">Kode Pos</label>
                            <input type="text" class="form-control border border-black w-75" id="postal_code"
                                name="postal_code" value="{{ $user->profile->postal_code }}">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5 py-3">
                    <button type="submit" class="btn tombolhijau w-50 custom-shadow p-3 fw-bold fs-5">Update</button>
                </div>
            </form>
        </div>
    </div>
    @include('components.footer')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // Trigger file input when image is clicked
            $('.profile-image').on('click', function() {
                $('#file-input').click();
            });

            // Handle file selection
            $('#file-input').on('change', function() {
                // File selection logic
                alert('Berhasil Memilih File Image');
                // Optionally, update the profile image preview
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.profile-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>

@endsection
