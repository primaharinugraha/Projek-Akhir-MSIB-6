
    <div class="container">
        <h1>Create a New Plan</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('plans.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label for="goal" class="form-label">Goal</label>
                <input type="number" class="form-control" id="goal" name="goal" value="{{ old('goal') }}" required>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

