<?php
session_start();
include('../db_con.php');
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    
    $check_email="SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($con, $check_email);
    if(mysqli_num_rows($res) > 0){
        $row = mysqli_fetch_array($res);
        if($password===$row['password']){
            $_SESSION['user_id']=$row['id'];
            include("seission.php");
            if($row['type']==="admin"){
                header("Location: ../../../Admin Dashboard Panel/index.php");
            }else{
                header("Location: ../../../user/index.php");
            }

        }else{
            header("Location: ../../../login.php?rn=The Password Not corect");
        }
    }else{
        header("Location: ../../../login.php?rn=The Email Not Used");
    }
}