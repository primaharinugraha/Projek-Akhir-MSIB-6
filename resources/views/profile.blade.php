@extends('components.template')

@section('title', 'profile')
    
@section('content')
    {{-- navbar --}}
 @include('components.navbar')
 <div class="container-fluid py-5" style="background: #ccefe7;">
    <div class="icont-back pt-5 mt-2">
        <a href="{{route('user.home')}}" class="text-decoration-none text-dark fs-1">
            <i class="fa-regular fa-circle-left"></i>
        </a>
    </div>
     <div class="profile-image d-flex justify-content-center py-1">
        <img src="data:image/jpeg;base64,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" alt="profile_image" class="img-fluid rounded-circle" style="cursor: pointer; height:170px;">
     </div>
     <h2 class="text-center" style="color:  #00ae86;">Profile</h2>
     <div class="container mt-5">
        <form action="" class="fw-bold ms-5">
            <input type="file" name="profile_image" id="file-input" class="d-none">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control border border-black w-75" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <div>
                            <input type="radio" name="" id="" value="">
                            <label for="laki_laki" class="ms-2">Laki-laki</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="" id="" value="">
                            <label for="perempuan" class="ms-2">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="sumber_penghasilan" class="form-label">Sumber Penghasilan</label>
                        <input type="text" class="form-control border border-black w-75" id="sumber_penghasilan" name="sumber_penghasilan">
                    </div>
                    <div class="mb-3">
                        <label for="profesi" class="form-label">Profesi</label>
                        <input type="text" class="form-control border border-black w-75" id="profesi" name="profesi">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Status Member</label>
                        <div>
                            <input type="radio" name="" id="" value="">
                            <label for="berlangganan" class="ms-2">Berlangganan</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="" id="" value="">
                            <label for="tidak" class="ms-2">Tidak</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="negara" class="form-label">Negara</label>
                        <input type="text" class="form-control border border-black w-75" id="negara" name="negara">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control border border-black w-75" id="umur" name="umur">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Status</label>
                        <div>
                            <input type="radio" name="" id="" value="">
                            <label for="lajang" class="ms-2">Lajang</label>
                        </div>
                        <div class="mt-2">
                            <input type="radio" name="" id="" value="">
                            <label for="menikah" class="ms-2">Menikah</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pendidikan_terakhir" class="form-label">Pendidikan Terkahir</label>
                        <input type="text" class="form-control border border-black w-75" id="pendidikan_terakhir" name="pendidikan_terakhir">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" class="form-control border border-black w-75" id="email" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control border border-black w-75" id="alamat" name="alamat">
                    </div>
                    <div class="">
                        <label for="kode_pos" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control border border-black w-75" id="kode_pos" name="kode_pos">
                    </div>
                </div>
           </div>
           <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn tombolhijau w-50 custom-shadow p-2 fw-bold fs-5">Update</button>
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
 
 