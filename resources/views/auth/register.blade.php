<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <ul class="m-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <form method="POST" action="{{ route('register_user') }}">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ old('name') }}"><br>
        @error('name')
            <span>{{ $message }}</span><br>
        @enderror

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ old('email') }}"><br>
        @error('email')
            <span>{{ $message }}</span><br>
        @enderror

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        @error('password')
            <span>{{ $message }}</span><br>
        @enderror

        <label for="password_confirmation">Confirm Password:</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation"><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>