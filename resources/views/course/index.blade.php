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
                    <h3>Course Details</h3>
                    <a href="{{ route('course.create') }}" class="btn btn-info">Add course</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="table-success">
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Duration</td>
                                <td>Starting Date</td>
                                <td>Ending Date</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($datas as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->duration }}</td>
                                    <td>{{ $data->startingDate }}</td>
                                    <td>{{ $data->endingDate }}</td>
                                    <td>
                                        <div style="display:flex;gap:1rem;">
                                            <a href="{{ route("course.show",$data->id) }}" class="btn btn-info">Show</a> 
                                        <a href="{{ route("course.edit",$data->id) }}" class="btn btn-success">Edit</a>
                                        <form method="post" action="{{route ("course.destroy",['course'=>$data->id]) }}">
                                            @csrf
                                            @method('delete')
                                       <button type="submit" class="btn btn-danger" onclick=" return confirm('Are you sure?')">Delete</button>
                                
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
       </div>
    </div>
    
</body>
</html>