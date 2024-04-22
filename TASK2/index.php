<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="arraystyle.css">
</head>
<body>
    <form action="" method="POST">
            <label for="input1">Array 1</label>
                <input type="text" name="input1">
            <label for="input2">Array 2</label>
                <input type="text" name="input2">
            <label for="input3">Array 3</label>
                <input type="text" name="input3">
            <input type="checkbox" name="sum1" id="asc1" value="ASC">ASC</input>
            <input type="checkbox" name="sum1" id="dsc1" Value="DSC">DSC</input>
            <label for="input4">Array 4</label>
                <input type="text" name="input4">
            <label for="input5">Array 5</label>
                <input type="text" name="input5">
            <label for="input6">Array 6</label>
                <input type="text" name="input6">
            <input type="checkbox" name="sum2" id="asc2" value="ASC">ASC</input>
            <input type="checkbox" name="sum2" id="dsc2" value="DSC">Dsc</input>
            <label for="input7">Array 7</label>
                <input type="text" name="input7">
            <label for="input8">Array 8</label>
                <input type="text" name="input8">
            <label for="input9">Array 9</label>
                <input type="text" name="input9">
            <input type="checkbox" name="sum3" id="asc3" value="ASC">ASC</input>
            <input type="checkbox" name="sum3" id="dsc3" value="DSC">Dsc</input>
        <input type="submit" name="submit"></input>
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