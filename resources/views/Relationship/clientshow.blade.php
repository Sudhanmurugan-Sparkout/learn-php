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
    <div class="container bg-light">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header bg-info">
                        <h1>Eloquent Relationship -> One to many</h1>
                        <h3> Company Name : {{ $company->name }} </h3>
                        <p>Client Details</p>
                    </div>
                    <div class="card-body">
                        @foreach ($clients as $client)
                        <p class="card-text">Name : <strong>{{ $client->name}}</strong></p>
                        <p class="card-text">Location : <strong>{{ $client->location }}</strong></p>
                        <p class="card-text">Project Name : <strong>{{ $client->project_name }}</strong></p>  
                        @endforeach
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>