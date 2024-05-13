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
                <a href="{{ route('book.index') }}" class="btn btn-info float-right mb-3">Close</a>
                <table class="table">
                    <thead class="table-danger">
                        <tr>
                            <td>Id</td>
                            <td>Title</td>
                            <td>Status</td>
                            <td>created At</td>
                            <td>Updated_At</td>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                            <td>{{ $show->id }}</td></td>
                            <td>{{ $show->title }}</td>
                            @if ($show->status=true)
                            <td>Active</td>
                            @else
                            <td>Inactive</td>
                            @endif
                            <td>{{ $show->created_at}}</td>
                            <td>{{$show->updated_at }}</td>
                       </tr>
                          
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>