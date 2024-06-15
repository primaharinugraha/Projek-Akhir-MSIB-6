@extends('components.template')

@section('title', 'proyek')

@section('content')
@include('components.navbar')

<div class="container-fluid py-5" style="background: #ccefe7;">
    <div class="container pt-5">
        <h2 class="text-center mt-5 fw-bold" style="color: #00ae86; ">Proyek</h2>
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
        <div class="d-flex justify-content-start gap-3 mt-5">
            <a href="{{route('plans.create')}}">
                <button type="submit" class=" btn text-white" style="background: #00ae86;">
                    Buat
                    <i class="fa-solid fa-plus"></i>
                </button>
            </a>
        
        </div>
      
        <table class="table table table-striped table-bordered mt-5">
            <thead>
                <tr class="text-center">
                    <th>Name</th>
                    <th>Goal</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                    <tr class="text-center">
                            <td>{{ $plan->name }}</td>
                            <td>{{ number_format($plan->goal, 0, ',', '.') }} IDR</td>
                            <td>{{ $plan->start_date }}</td>
                            <td>{{ $plan->date }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('plans.show', ['plan' => $plan]) }}" class="btn btn-info me-2">
                                Lihat
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <form action="{{route('plans.destroy', ['plan' => $plan])}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" btn btn-danger text-white">
                                    Hapus
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('components.footer')
@endsection