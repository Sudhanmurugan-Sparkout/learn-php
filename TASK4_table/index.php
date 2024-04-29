<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        form{
           
          justify-content: center;
          text-align: center;
          width: fit-content;
          height: fit-content;
          margin: auto; 
          margin-top:200px;
        }
        #heading{
               font-family:'Times New Roman', Times, serif;
        }
        #result{
             margin-left: 730px;
             margin-top: 20px;
             
        }
    </style>
</head>
<body class="bg-primary bg-opacity-25">
    <form action="" method="post">
        <h3 id="heading">Tables</h3>
        <div class="form-group m-3">
            <label for="input" >Input</label>
            <input type="text" id="input" name="input"  required>
        </div>
        <div class="form group m-3">
            <label for="value">Value</label>
            <input type="text" name="value" id="value" required>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</body>
</html>


<?php 

if(isset($_POST["submit"])){

$input=$_POST["input"];
$value=$_POST["value"];

for($i=1;$i<=$value;$i++){

    $result=$i*$input;
    echo "<div id=result>$i * $input = $result" ."<br></div>";
}


}



?>