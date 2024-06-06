<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form method="POST" action="{{ route('register_user') }}">
        @csrf
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"><br>
        @error('first_name')
            <span>{{ $message }}</span><br>
        @enderror
        
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"><br>
        @error('last_name')
            <span>{{ $message }}</span><br>
        @enderror

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ old('email') }}"><br>
        @error('email')
            <span>{{ $message }}</span><br>
        @enderror

        <label for="phone_number">Phone Number:</label><br>
        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"><br>
        @error('phone_number')
            <span>{{ $message }}</span><br>
        @enderror
        
        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender">
            <option value="male" @if(old('gender') == 'male') selected @endif>Male</option>
            <option value="female" @if(old('gender') == 'female') selected @endif>Female</option>
        </select><br>
        @error('gender')
            <span>{{ $message }}</span><br>
        @enderror
        
        <label for="job">Job:</label><br>
        <input type="text" id="job" name="job" value="{{ old('job') }}"><br>
        @error('job')
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
