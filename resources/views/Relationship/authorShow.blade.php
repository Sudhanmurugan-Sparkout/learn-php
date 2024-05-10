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
                    <div class="card-header bg-info">
                        <h2 class="card-title">Eloquent Relationship -> Many To Many</h2>
                        <h4 class="card-text">BOOK name : <strong>{{ $book->name }}</strong></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped ">
                            <thead class="table-danger">
                                <tr>
                                    <td>Id</td>
                                    <td>Name</td>
                                    <td>Country</td>
                                </tr>
                            </thead>
                            <tbody>
                              
                                    @foreach ($authors as $author)
                                    <tr>
                                    <td>{{ $author->id }}</td>
                                    <td>{{ $author->name }}</td>
                                    <td>{{ $author->Country }}</td>  
                                </tr>   
                                    @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>