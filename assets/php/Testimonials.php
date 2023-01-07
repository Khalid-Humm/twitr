<?php
include("db_con.php");
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sql=mysqli_query($con,"INSERT INTO `testimonials`(`Full_name`, `email`, `Message`)
     VALUES ('$name','$email','$message')");
     if($sql){
        header("Location: ../../index.php");

     }else{
        header("Location: ../../index.php");
     }

}