<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{ route('authenticate') }}" method="POST">
        @csrf
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
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
