@inject('carbon', 'Carbon\Carbon')

<!DOCTYPE html>
<html>
<head>
    <title>Finance Entries</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.standalone.min.css" integrity="sha512-D5/oUZrMTZE/y4ldsD6UOeuPR4lwjLnfNMWkjC0pffPTCVlqzcHTNvkn3dhL7C0gYifHQJAIrRTASbMvLmpEug==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1>Finance Entries</h1>
    <h1>halo {{Auth::user()->profile->first_name}}</h1>
    
    <label for="year">Year</label>
    <input type="string" name="year" class="datepicker-year" value="{{ isset($year) ? $year : '' }}">
    <label for="month">Month</label>
    <input type="string" name="month" class="datepicker-yearMonth" value="{{ isset($year) && isset($month) ? $year.'-'.$month : '' }}">
    <a href="{{ route('finances.index') }}">Reset</a>

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
    <a href="{{ route('finances.create', ['year' => $year, 'month' => $month])}}">Add New Finance</a>
    
    <h3>Asset</h3>

    @if(isset($routeYear) && !isset($routeMonth))
    <ul>
    @foreach($assetsByMonth as $finance)
        <li>{{ $finance->months }} | {{ $finance->sums }}</li>
    @endforeach
    </ul>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Name</th>
                <th>Total</th>
                <th>Date</th>
                <th>Actions</th>
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
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>{{$totalAssets}}</p>

    <h3>Liabilities</h3>

    @if(isset($routeYear) && !isset($routeMonth))
    <ul>
        @foreach($liabilitiesByMonth as $finance)
            <li>{{ $finance->months }} | {{ $finance->sums }}</li>
        @endforeach
    </ul>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Name</th>
                <th>Total</th>
                <th>Date</th>
                <th>Actions</th>
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
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>{{$totalLiabilities}}</p>

    <h3>TOTAL</h3>
    <p>{{$total}}</p>

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
        <button type="submit">Add to next month</button>
    </form>
    @endif
    <a href="{{ route('finances.export') }}"
        class="btn btn-warning  mb-2 fw-medium">Export Hasil</a>
    <br>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
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
</body>
</html>
