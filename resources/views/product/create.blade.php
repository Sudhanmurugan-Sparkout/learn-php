<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>product</h3>
                        <a href="{{ route('product.index') }}">close</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="post">
                        @csrf
                        @method('post')
                        
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value={{ old('name') }}>
                        </div>
                        @if($errors->has('name'))
                        <p><strong class="text-danger">
                            
                            {{ $errors->first('name') }}
                        </strong></p>
                        @endif
                        <div>
                            <label for="brand">Brand</label>
                            <input type="text" name="brand" id="brand" value={{ old('duration') }}>
                        </div>
                        @if($errors->has('brand'))
                        <p><strong class="text-danger">
                            
                            {{ $errors->first('brand') }}
                        </strong></p>
                        @endif
                        <div>
                            <label for="stock">Stock</label>
                            <input type="text" name="stock" id="stock" value={{ old('stock') }}>
                        </div>
                        @if($errors->has('stock'))
                        <p><strong class="text-danger">
                            
                            {{ $errors->first('stock') }}
                        </strong></p>
                        @endif
                        
                        <button type="submit" class="btn btn-success">Add</button> 
                        <a href="{{ route('product.index') }}" class="btn btn-info">close</a>
                    </form>
                </div>
            </div>
        </div>
       </div>
    </div>
    
</body>
</html>
                        
                        