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
                <div class="card mt-5">
                    <div class="card-header bg-info">
                        <h1>Eloquent Relationship -> One to one</h1>
                        <h3>Company name :{{ $company->name }}</h3>
                        <p>Employee details</p>
                    </div>
                    <div class="card-body">
                          <p class="card-text">Id : <strong>{{ $company->id }}</strong></p>
                          <p class="card-text">Name : <strong>{{ $company->name }}</strong></p>
                          <p class="card-text">Role : <strong>{{ $company->role }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>