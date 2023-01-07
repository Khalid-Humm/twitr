<?php
include("../db_con.php");
date_default_timezone_set('Asia/Damascus');
session_start();
$time=date('h:m:s');
$data=date('Y-m-d');
$id=$_SESSION['user_id'];
$sql_session=mysqli_query($con,"INSERT INTO `seission`(`login_data`, `login_time`, `logout_date`, `logout_time`, `iduser`) 
VALUES ('$data','$time','','','$id')");
$sql=mysqli_query($con,"SELECT * FROM seission WHERE 1");
while($ff=mysqli_fetch_assoc($sql)){
    $i=$ff['id'];
}



$_SESSION['login_session']=$i;

