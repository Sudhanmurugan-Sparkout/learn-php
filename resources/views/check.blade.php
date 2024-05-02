<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello <?php echo $name?></h1>
    <br>
    <h2>hello {{$name}}</h2>
    @if($name=="sudhan")
    <h3>hello  admin</h3>
    @else if
    <h4>hello user</h4>
    @endif

</body>
</html>