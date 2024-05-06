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
                    
                </div>
                <div class="card-body">
                    <form action="{{ route('course.store') }}" method="post" class="form-group">
                        @csrf
                       
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div>
                            <label for="duration">Duration</label>
                            <input type="text" name="duration" id="duration">
                        </div>
                        <div>
                            <label for="sdate">Starting Date</label>
                            <input type="date" name="sdate" id="sdate">
                        </div>
                        <div>
                            <label for="edate">Ending Date</label>
                            <input type="date" edate="edate" id="edate">
                        </div>
                        <button type="submit" class="btn btn-success">Add</button> 
                        <a href="{{ route('course.index') }}" class="btn btn-info">close</a>
                    </form>
                </div>
            </div>
        </div>
       </div>
    </div>
    
</body>
</html>