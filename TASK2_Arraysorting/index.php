<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="arraystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-primary bg-opacity-25">
    
    <form action="" method="POST" class="form-group ">
    <div class="main">
        <h3 id="heading">Array sorting</h3>
        <div class="first">
            <label for="input1">Array 1</label>
                <input type="text" name="input1" >
            <label for="input2">Array 2</label>
                <input type="text" name="input2">
            <label for="input3">Array 3</label>
                <input type="text" name="input3">
            <input type="radio" name="sum1" id="asc1" value="ASC">ASC</input>
            <input type="radio" name="sum1" id="dsc1" Value="DSC">DSC</input>
            </div>
            <div class="second">
            <label for="input4">Array 4</label>
                <input type="text" name="input4">
            <label for="input5">Array 5</label>
                <input type="text" name="input5">
            <label for="input6">Array 6</label>
                <input type="text" name="input6">
            <input type="radio" name="sum2" id="asc2" value="ASC">ASC</input>
            <input type="radio" name="sum2" id="dsc2" value="DSC">Dsc</input>
            </div>
            <div class="third">
            <label for="input7">Array 7</label>
                <input type="text" name="input7">
            <label for="input8">Array 8</label>
                <input type="text" name="input8">
            <label for="input9">Array 9</label>
                <input type="text" name="input9">
            <input type="radio" name="sum3" id="asc3" value="ASC">ASC</input>
            <input type="radio" name="sum3" id="dsc3" value="DSC">Dsc</input>
            </div>
            </div>
        <input type="submit" name="submit" class="btn btn-success"></input>
    </form>
   
</body>
<?php
if(isset($_POST['submit'])){
    $work = array($_POST["sum1"],$_POST["sum2"],$_POST["sum3"]);
    $array1=array($_POST["input1"],$_POST["input2"],$_POST["input3"]);
    $array2=array($_POST["input4"],$_POST["input5"],$_POST["input6"]);
    $array3=array($_POST["input7"],$_POST["input8"],$_POST["input9"]);

    for($i=1;$i<=count($work);$i++){
        if($work[$i-1]=='ASC'){
            if($i==1){
                sort($array1);
                print_r($array1);
            }
            if($i==2){
                sort($array2);
                print_r($array2);
            }
            if($i==3){
                sort($array3);
                print_r($array3);
            }
            
            
        }
        else if($work[$i-1]=='DSC'){
            if($i==1){
                rsort($array1);
                print_r($array1);
            }
            if($i==2){
                rsort($array2);
                print_r($array2);
            }
            if($i==3){
                rsort($array3);
                print_r($array3);
            }
        }

    }
}
?>
</html>