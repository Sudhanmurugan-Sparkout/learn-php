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
             font-size: large;
             font-family: Georgia, 'Times New Roman', Times, serif;
             color:orange;
             
        }
        form input{
            margin: 10px;
        }
    </style>
</head>
<body class="bg-primary bg-opacity-25">
    <form action="" method="post" class="form-group">
        <h3 id="heading">Diference between two dates</h3>
        <div>
        <label for="firstdate">Start date</label>
        <input type="date" name="fdate" id="firstdate">
        </div>
        <div>
        <label for="enddate">End date</label>
        <input type="date" name="edate" id="enddate">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Result</button>
    </form>
</body>
</html>

<?php 
if(isset($_POST["submit"])){
    $startDate = $_POST["fdate"];
    $endDate = $_POST["edate"];

    function plural($value, $text){
        return $value === 1 ? $text : $text . "s";
    }

    $result = array();
    
    $subract = date_diff(date_create($startDate), date_create($endDate));
    $year = $subract->y;
    $month = $subract->m;
    $day = $subract->d;

    if($year > 0){
        $result[] = $year . " " . plural($year, "year");
    }
    if($month > 0){
        $result[] = $month . " " . plural($month, "month");
    }
    if($day > 0){
        $result[] = $day . " " . plural($day, "day");
    }

   $final_result=implode(",",$result);
echo "<div id=result>$final_result</div>";
}
?>


