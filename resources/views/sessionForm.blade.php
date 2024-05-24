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
                    <form action="{{ route('session.store') }}" method="post">
                        @csrf
                        
                        <div>
                            <label >Name</label>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <label >Email</label>
                            <input type="text" name="email">
                        </div>
                      
                        <button class="btn btn-primary" type="submit">Login</button>
                    </form>
               
            </div>
        </div>
    </div>
   </div>
    
</body>
</html>