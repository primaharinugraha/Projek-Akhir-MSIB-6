<!DOCTYPE html>
<html>
<head>
    <title>Edit Finance Entry</title>
</head>
<body>
    <h1>Edit Finance Entry</h1>
    <form action="{{ route('finances.update', $finance->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="type">Type</label>
            <select id="type" name="type" required>
                <option value="asset" {{ $finance->type == 'asset' ? 'selected' : '' }}>Asset</option>
                <option value="liability" {{ $finance->type == 'liability' ? 'selected' : '' }}>Liability</option>
            </select>
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $finance->name }}" required>
        </div>
        <div>
            <label for="total">Total</label>
            <input type="number" id="total" name="total" value="{{ $finance->total }}" required>
        </div>
        <div>
            <label for="total_asset">Total Asset</label>
            <input type="number" id="total_asset" name="total_asset" value="{{ $finance->total_asset }}" required>
        </div>
        <div>
            <label for="total_liability">Total Liability</label>
            <input type="number" id="total_liability" name="total_liability" value="{{ $finance->total_liability }}" required>
        </div>
        <div>
            <label for="date">Date</label>
            <input type="date" id="date" name="date" value="{{ $finance->date }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>
