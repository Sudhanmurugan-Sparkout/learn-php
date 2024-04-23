
<?php 

include_once 'database.php';

if(isset($_POST["submit_login"])){

$email=$_POST["email"];
$login_password=$_POST["login_password"];

$sql="select* from signup_information where email='$email' and password='$login_password'";
$check=mysqli_query($conn,$sql);
// if($check){
//    $a=mysqli_num_rows($check);
//    echo $a;
// }else{
//     echo "err : " . mysqli_error($conn);
// }

if(mysqli_num_rows($check)==1){

    header("location:crud.php");

}else{
    header("location:index.php?message=Username and email is not valid ");
    exit();
}




}




?>