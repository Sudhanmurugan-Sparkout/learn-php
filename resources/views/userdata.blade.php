<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User data</h1>
    
    <form action="/getall" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
       <div>
        <label for="password">password</label>
        <input type="password" id="password" name="password">
       </div>
       
       <button type="submit" name="submit">submit</button>
     
    </form>
</body>
</html>