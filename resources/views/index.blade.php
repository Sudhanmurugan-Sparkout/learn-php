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

                    <h3>Author Details</h3>
                    <a href="{{ route('author.create') }}" class="btn btn-warning mb-3">Add</a>
                <table class="table">
                    <thead class="table-success">
                        <tr>
                            <td>S.No</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody class="table-stripped">
                       
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                @if ($data->Status=true)
                                <td>Active</td>
                                @else
                                <td>Inactive</td>
                                @endif
                                <td>
                                    <div style="display:flex;gap:1rem;">
                                    <a href="{{ route('author.show',$data->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('author.edit',$data->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('author.destroy',['author'=>$data->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>