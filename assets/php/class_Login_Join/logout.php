<?php
include("../db_con.php");
date_default_timezone_set('Asia/Damascus');
session_start();
$time=date('h:m:s');
$data=date('Y-mm-dd');
$sql=mysqli_query($con,"UPDATE `seission` SET 
`logout_date`='$data',
`logout_time`='$time'
WHERE `id`='$_SESSION[login_session]'");
if($sql){
    session_unset();
session_write_close();
session_destroy();
header("location: ../../../login.php");
}




?>
