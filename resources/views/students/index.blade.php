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
        <div class="col-md-12 mt-5p">
            <div class="card">
                <div class="card-header">
                    <h2>Students Details</h2>
                    <a href="{{ url('student/create') }}">Add students</a>
                </div>
                <div class="card-body">
                   {{-- <div>{{  session()->$success }}</div> --}}
                      <table class="table table-striped">
                        <thead class="table-success">
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Gender</td>
                                <td>Date of birth</td>
                                <td>class</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($datas as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->gender }}</td>
                                    <td>{{ $data->DOB }}</td>
                                    <td>{{ $data->class }}</td>
                                    <td>
                                        <a href="{{ url("student/$data->id/edit") }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url("student/$data->id/delete") }}"class="btn btn-danger">Delete</a> 
                                    </td>
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