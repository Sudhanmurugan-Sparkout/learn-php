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
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2> Add Students </h2>
                    <a href="{{ url('student') }}" class="btn btn-danger">close</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('student/create') }}" method="post">
                        @csrf
                        <div>
                            <label >Name</label>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <label >Gender</label>
                            <input type="text" name="gender">
                        </div>
                        <div>
                            <label >DOB</label>
                            <input type="date" name="dob">
                        </div>
                        <div>
                            <label >class</label>
                            <input type="text" name="class">
                        </div>
                        <button class="btn btn-primary" type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
    
</body>
</html>