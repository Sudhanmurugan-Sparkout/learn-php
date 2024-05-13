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
                    <h3>Add Book Details</h3>
                    
                </div>
                
                <div class="card-body">
                    <form action="{{ route('book.store') }}" method="post" class="form-group">
                        @csrf
                       
                        <div>
                            <label for="name">Title:</label>
                            <input type="text" name="title" id="name" value={{ old('title') }}>
                        </div>
                        @if($errors->has('title'))
                        <p><strong class="text-danger">
                            
                            {{ $errors->first('title') }}
                        </strong></p>
                        @endif
                        <div>
                            <p>Author Id :</p>
                        <select class="form-select" aria-label="Default select example" name="author_id">
                            <option selected>Author</option>
                            
                            @foreach ($datas as $data)
                            <option value={{ $data->id }}>{{$data->name}}</option>
                            @endforeach
                            </select>
                        </div>
                       <p> Book Status :</p>
                        <div>
                            
                            <label for="status">Active</label>
                            <input type="radio" name="status" id="status" value=1>
                            <label for="status1">InActive</label>
                            <input type="radio" name="status" id="status1" value=0  >
                        </div>
                        <div>
                            <select class="form-select" multiple aria-label="Multiple select example" name="genre_id[]">
                                <option selected disabled>Genres</option>
                                @foreach ($genres as $genre)
                                <option value={{ $genre->id }}>{{ $genre->name }}</option>  
                                @endforeach
                              </select>
                        </div>
                        @if($errors->has('genre_id'))
                        <p><strong class="text-danger">
                            
                            {{ $errors->first('genre_id') }}
                        </strong></p>
                        @endif
                        <p>If you want Add genre</p>
                        <div>
                            <label for="name">Genre Name</label>
                            <input type="text" name="genre_name" id="name" value={{ old('genre_name') }}>
                        </div>
                        @if($errors->has('genre_name'))
                        <p><strong class="text-danger">
                            
                            {{ $errors->first('genre_name') }}
                        </strong></p>
                        @endif
                        <p> Genre Status :</p>
                        <div>
                            
                            <label for="status">Active</label>
                            <input type="radio" name="genre_status" id="status" value=1>
                            <label for="status1">InActive</label>
                            <input type="radio" name="genre_status" id="status1" value=0  >
                        </div>
                        <button type="submit" class="btn btn-success">Add</button> 
                        <a href="{{ route('book.index') }}" class="btn btn-info">close</a>
                    </form>
                </div>
            </div>
        </div>
       </div>
    </div>
    
</body>
</html>