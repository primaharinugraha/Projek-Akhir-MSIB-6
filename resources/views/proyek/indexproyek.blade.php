@extends('components.template')

@section('title', 'proyek')

@section('content')
@include('components.navbar')

<div class="container-fluid py-5" style="background: #ccefe7;">
    <div class="container pt-5">
        <h3 class="text-center mt-5 fw-bold" style="color: #00ae86; ">Proyek</h3>
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
        <div class="d-flex justify-content-start gap-3 mt-5">
            <a href="{{route('create.proyek')}}">
                <button type="submit" class=" btn text-white" style="background: #00ae86;">
                    Buat
                    <i class="fa-solid fa-plus"></i>
                </button>
            </a>
        
        </div>
        <table class="table table table-striped table-bordered mt-5">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Goal</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($plans as $plan) --}}
                    <tr>
                        <td></td>
                        <td> IDR</td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="{{route('proyek.show')}}" class="btn btn-info me-2">
                                Lihat
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <form action="" method="POST" style="display:inline;">
                                {{-- @csrf
                                @method('DELETE') --}}
                                <button type="submit" class=" btn btn-danger text-white">
                                    Hapus
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
</div>
@include('components.footer')
@endsection