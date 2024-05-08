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
                        <a href="{{ route('product.create') }}">Add</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-stripped table-success">
                            <thead class="table-succces">
                               <tr>
                                <td>Name</td>
                                <td>Brand</td>
                                <td>stock</td>
                                <td>Action</td>
                               </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($data as $list)
                                    <dt>{{ $list->name }}</dt>
                                    <dt>{{ $list->brand }}</dt>
                                    <dt>{{ $list->stock }}</dt>
                                   <dt>
                                        <div style="flex;gap:1rem">
                                        <a href="{{ route('product.show',$list->id) }}" class="btn btn-info">Show</a>
                                        <a href="{{ route('product.edit',$list->id) }}" class="btn btn-success">Edit</a>
                                        <form action="{{ route('product.destroy',$list->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>  
                                   </dt>
                                        
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
            
            </div>
        </div>
    </div>
    
</body>
</html>