<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($cars as $car)
    <div>{{ $car->name }}</div>
    <div><img src="{{ asset('images/'.$car->image) }}" alt="cars" height="200px" width="200px"></div>
    @endforeach
    
</body>
</html>