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
    @include('navbar')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card mt-5 mt-5">
                    <div class="card-header bg-info mb-3">
                        <h2 class="card-title">Books and Genres</h2>
                        {{-- {{ dd($books) }} --}}
                    </div>
                    
                        <table class="table ">
                            <thead class="table-danger">
                                <tr>
                                    <td>Book title</td>
                                    <td> Genre Name</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody class="table-dark table-striped">
                              
                                    @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->title }}</td>
                                    <td>@foreach ($book->genres as $genre)
                                        {{ $genre->name }}
                                        <br>
                                        @endforeach</td>
                                        <td>@foreach ($book->genres as $genre) 
                                    @if($genre->status==true)
                                    <p class="text-success">Active</p> 
                                    @else
                                    <p class="text-warning">Inactive</p>
                                    @endif
                                    @endforeach</td>
                                   
                                    
                                </tr>   
                                    @endforeach
                                
                            </tbody>
                        </table>
                </div>
        </div>
    </div>
</body>
</html>