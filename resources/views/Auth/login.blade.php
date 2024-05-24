<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('login.store') }}" method="post">
        @method('post')
        @csrf
        
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
            <button type="submit">Login</button>
            
    </form>
    
</body>
</html>