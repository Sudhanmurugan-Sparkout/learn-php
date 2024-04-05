<?php  

if(isset($_POST["submit"])){

    $file=$_FILES["file"];

    $filename=$_FILES["file"]["name"];
    $fileTyp=$_FILES["file"]["type"];
    $fileTmpname=$_FILES["file"]["tmp_name"];
    $fileSize=$_FILES["file"]["size"];
    $fileErr=$_FILES["file"]["error"];

    $fileExp=explode(".",$filename);
    $filestrLow=strtolower(end($fileExp));
    $check=array("jpg","jpeg","png","pdf","dif","gif");

    if(in_array($filestrLow,$check)){
           if($fileErr===0){
                   if($fileSize<100000){
                         $filenewname=uniqid() . "." . $filestrLow;
                         $fileupload='uploads/' . $filenewname;
                         move_uploaded_file($fileTmpname,$fileupload);
                   }else{
                    echo "file is too big ";
                   }
           }else{
               echo "the file have a error to upload";
           }
    }else{
        echo "you don't upload this type file";
    }

}

echo "Your file submit sucessfully...!"

?>