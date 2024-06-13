
    <div class="container">
        <h1>Plans</h1>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('plans.create') }}" class="btn btn-primary mb-3">Create New Plan</a>

        @if ($plans->isEmpty())
            <p>No plans available.</p>
        @else
            <table class="table">
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
                    @foreach ($plans as $plan)
                        <tr>
                            <td>{{ $plan->name }}</td>
                            <td>{{ number_format($plan->goal, 0, ',', '.') }} IDR</td>
                            <td>{{ $plan->start_date }}</td>
                            <td>{{ $plan->date }}</td>
                            <td>
                                <a href="{{ route('plans.show', ['plan' => $plan]) }}" class="btn btn-info">View</a>
                                <form action="{{route('plans.destroy', ['plan' => $plan])}}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

