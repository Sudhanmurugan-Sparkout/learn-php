<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('register.store') }}" method="post">
        @method('post')
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value={{ old('name') }}>
            </div>
            @error('name')
                <p style="color:red;">{{ $message }}</p>
            @enderror
            <div>
                <label for="email">Email</label>
            <input type="text" name="email" id="email"  value={{ old('email') }}>
            </div>
            @error('email')
                <p style="color:red;">{{ $message }}</p>
            @enderror
            <div>
                <label for="password">Password</label>
            <input type="password" name="password" id="password">
            </div>
            @error('password')
                <p style="color:red;">{{ $message }}</p>
            @enderror
            <div>
                <label for="password">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password">
            </div>
            <button type="submit">Register</button>
            
    </form>
    
</body>
</html>