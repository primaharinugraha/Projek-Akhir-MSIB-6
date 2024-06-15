<!DOCTYPE html>
<html>

<head>
    <title>Add New Finance Entry</title>
</head>

<body>
    <ul class="m-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <h1>Add New Finance Entry</h1>
    <form action="{{ route('finances.store') }}" method="POST">
        @csrf
        <div>
            <label for="type">Type</label>
            <select id="type" name="type" required>
                <option value="asset">Asset</option>
                <option value="liability">Liability</option>
            </select>
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="value">value</label>
            <input type="number" id="value" name="value" value="{{ old('value') }}" required>
        </div>
        <div>
            <label for="date">Date</label>
            <input type="string" id="date" name="date" value="{{ old('date') ? old('date') : $year.'-'.$month }}" required>
        </div>
        <button type="submit">Save</button>
    </form>
</body>

</html>
