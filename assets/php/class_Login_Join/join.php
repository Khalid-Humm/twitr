<?php
date_default_timezone_set('Asia/Damascus');
include('../db_con.php');
session_start();
if(isset($_POST['join'])){
    $firstname=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $repassword=md5($_POST['repassword']);
    $birth=$_POST['data'];
    $data=date('Y-m-d');
    $email_check = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if($password===$repassword){
        if(mysqli_num_rows($res) > 0){
            header("Location: ../../../login.php?rn=The Email Used");
        }else{
            if(strlen($password)>=8){
                    $sql=mysqli_query($con,"INSERT INTO `user`(`name`, `email`, `password`, `birthday`, `date_join`) 
                    VALUES ('$firstname','$email','$password','$birth','$data')");
                    if($sql){
                        header("Location: ../../../login.php?rn=User registration successful");

                    }else{
                        header("Location: ../../../login.php?rn=Not User registration successful");
                    }
            }else{
                header("Location: ../../../login.php?rn=the password not Enough");

            }
        }
    }else{
        header("Location: ../../../login.php?rn=password not corect");
    }
}
