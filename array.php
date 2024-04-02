
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array.php" method="post">
        <div>
            <label for="country">Country</label>
            <input type="text" name="country" id="country">
        </div>
        <input type="submit" value="capital" name="submit">
    </form>
</body>
</html>
<?php 
if(isset($_POST["submit"])){
$capitals=array("india"=>"New delhi","usa"=>"WASHINGTON","japan"=>"tokyo","china"=>"Beijing");

$capital=$capitals[strtolower($_POST["country"])];
echo $capital;
}

// array sorting

$subjects=array("tamil","english","maths","science","social");

sort($subjects);  // ascending

foreach($subjects as $sub){
    echo $sub . "<br>";
}

rsort($subjects); //descending


foreach($subjects as $sub){
    echo $sub . "<br>";
}


$books=array("the goat life" => "benyamin","asura" => "anand","parthipan kanuvugal"=>"kalki");
asort($books);  //values ascending

foreach($books as $book=>$author){
        echo $author. "<br>";
}

arsort($books);  //values descending

foreach($books as $book=>$author){
        echo $author . "<br>";
}

ksort($books);  //keys ascending

foreach($books as $book=>$author){
    echo $book . "<br>";
}

krsort($books);  //keys descending

foreach($books as $book=>$author)
{   
     echo $book . "<br>";
}

$books+=["kadal pura" =>"sandliyan"]; // to add value for associative array
 echo var_dump($books) . "<br>";


 array_push($subjects,"botany","biology");  // to add value for indexed array
 echo var_dump($subjects);

 
?>