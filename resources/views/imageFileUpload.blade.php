<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('image.upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('post')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    @if ($errors->has('name'))
        <div>{{ $errors->first('name') }}</div>
    @endif
    
    <div>
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
    </div>
</div>
@if ($errors->has('image'))
    <div>{{ $errors->first('image') }}</div>
@endif
    <button type="submit">Submit</button>
    </form>
</body>
</html>