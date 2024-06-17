
@extends('components.template')

@section('title', 'Kelola Uang')

@section('content')
@inject('carbon', 'Carbon\Carbon')

@include('components.navbar')

<div class="container-fluid py-5" style="background: #ccefe7;">
    <div class="container pt-5">
    
        <div>
                <h2 class="text-center mt-5 fw-bold mb-4" style="color: #00ae86;">Kelola Uang</h2>
                <h2 class=" fw-bold mb-4" style="color: #00ae86;">Hallo {{Auth::user()->profile->name}}</h2>
                <div class="filter mt-5">
                    <div class="row">
                        <div class="col-lg-6 mt-3 fw-bold">
                            <label for="year">Year</label>
                            <input type="string" name="year" class="datepicker-year  form-input custom-shadow  rounded ms-2" value="{{ isset($year) ? $year : '' }}">
                            <label for="month" class="ms-2">Month</label>
                            <input type="string" name="month" class="datepicker-yearMonth  form-input custom-shadow  rounded ms-2" value="{{ isset($year) && isset($month) ? $year.'-'.$month : '' }}">
                        </div>
                        <div class="col-lg-6 mt-3 ">
                            <a href="{{ route('finances.index') }}" class="btn btn-warning me-3">
                                Reset
                                <i class="fa-solid fa-hand-sparkles"></i>
                            </a>
                            
                            @php
                            $routeYear = isset($year) ? $year : null;
                            $routeMonth = isset($month) ?  $month : null;
                        @endphp
                        
                        @if(!isset($year))
                            @php
                                $year = $carbon::now()->year;
                            @endphp
                        @endif
                        @if(!isset($month))
                            @php
                                $month = $carbon::now()->month;
                            @endphp
                        @endif
                    <a href="{{ route('finances.create', ['year' => $year, 'month' => $month])}}" class="btn btn-success text-decoration-none">
                        Add New Finance
                        <i class="fa-solid fa-plus"></i>
                    </a>
                        </div>
                    </div>
                </div>
               
        </div>
        
    
        <h2 class="mt-5 fw-bold mb-4" style="color: #00ae86;">Asset</h2>
        <div class="card w-25 mb-5 py-3 custom-shadow">
            @if(isset($routeYear) && !isset($routeMonth))
            <ul class="fw-bold">
                @foreach($assetsByMonth as $finance)
                <li>{{ $finance->months }} | {{ $finance->sums }}</li>
                @endforeach
            </ul>
                @endif
           </div>
     
                {{-- table --}}
               <table class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>id</th>
                            <th>Type</th>
                            <th>Nama</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assets as $finance)
                        <tr>
                            <td>{{ $finance->id }}</td>
                            <td>{{ $finance->type }}</td>
                            <td>{{ $finance->name }}</td>
                            <td>{{ $finance->value }}</td>
                            <td>{{ $finance->date }}</td>
                            <td>
                                <form action="{{route('finances.destroy', ['finance' => $finance])}}" method="POST" style="display:inline;">
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
                <h2 class="mt-3 fw-bold" style="color: #00ae86;"> Total Asset:{{$totalAssets}}</h2>
                <h2 class="mt-5 fw-bold mb-4" style="color: #00ae86;">Liability</h2>
                    <div class="card card w-25 mb-5 py-3 custom-shadow">
                        @if(isset($routeYear) && !isset($routeMonth))
                     <ul class="fw-bold">
                        @foreach($liabilitiesByMonth as $finance)
                            <li>{{ $finance->months }} | {{ $finance->sums }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
  

                <table class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>id</th>
                            <th>Type</th>
                            <th>Nama</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($liabilities as $finance)
                        <tr>
                            <td>{{ $finance->id }}</td>
                            <td>{{ $finance->type }}</td>
                            <td>{{ $finance->name }}</td>
                            <td>{{ $finance->value }}</td>
                            <td>{{ $finance->date }}</td>
                            <td>
                                <form action="{{route('finances.destroy', ['finance' => $finance])}}" method="POST" style="display:inline;">
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
                <h2 class="mt-3 fw-bold"><span style="color: #00ae86;">Total Liabilities</span> : {{$totalLiabilities}}</h2>
                <h2 class="mt-3 fw-bold"><span style="color: #00ae86;">subtotal Asset-Liability</span> : {{$total}}</h2>
                @if($total != 0)
    @php
        $yearMonth = $carbon::create($year, $month, 1, 0, 0, 0)->addMonthsNoOverflow(1);
    @endphp
    <form action="{{route('finances.store')}}" method="POST">
        @csrf
            <input type="hidden" id="type" name="type" value="{{ $total >= 0 ? 'asset' : 'liability' }}" required>
            <input type="hidden" id="name" name="name" value="Sisa {{$year}} - {{$month}}" required>
            <input type="hidden" id="value" name="value" value="{{$total}}" required>
            <input type="hidden" id="date" name="date" value="{{ $yearMonth->year }}-{{ $yearMonth->month }}" required>
        <button type="submit" class="btn btn-success mb-3 mt-3 me-3">
            Add to next month
            <i class="fa-solid fa-plus"></i>
        </button>
        <a href="{{ route('finances.export') }}"class="btn btn-warning fw-medium">
            Export Hasil
            <i class="fa-solid fa-file-export"></i>
        </a>
    </form>
    @endif
</div>
    </div>
</div>
@include('components.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.datepicker-yearMonth').datepicker({
        format: 'yyyy-m',
        startView: "months", 
        minViewMode: "months"
    }).on("changeDate", function(e) {
        var route = "{{ route('finances.yearMonth', ['year' => '%year%', 'month' => '%month%']) }}".replace('%year%', e.date.getFullYear()).replace('%month%', e.date.getMonth()+1);
        window.location.href = route;
    });

    $('.datepicker-year').datepicker({
        format: 'yyyy',
        startView: "years", 
        minViewMode: "years"
    }).on("changeDate", function(e) {
        var route = "{{ route('finances.year', ['year' => '%year%']) }}".replace('%year%', e.date.getFullYear());
        window.location.href = route;
    });
</script>
@endsection
