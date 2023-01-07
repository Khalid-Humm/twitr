<?php
include("header.php");

error_reporting(0);
$error=$_GET['rn'];
if($error!=null){
  echo"<script>alert('".$error.".');</script>";
}
?>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Services</span>
                </div>
                <div class="box_serv">
                    <div class="edit_info_serv">
                        <form class="form" action="" method="post">
                            
                        <div class="Input">
                            <label for="Password">Password</label>
                            <input type="password" name="Password" class="style_input" id="Password" placeholder="*******">
                        </div>
                            <div class="Input">
                            <label for="rePassword">Re Password</label>
                            <input type="password" name="rePassword" class="style_input" id="rePassword" placeholder="*******">
                        </div>
                        <input type="submit" name="check" class="submit" value="ok">
                        </form>
                    </div>
                    <?php
                    if(isset($_POST['check'])){
                        $password=md5($_POST['Password']);
                        $repassword=md5($_POST['rePassword']);
                        if($password===$repassword){
                            $sql=mysqli_query($con,"SELECT * FROM user WHERE id='$_SESSION[user_id]'");
                            $row=mysqli_fetch_array($sql);
                            if($password===$row['password']){?>

<div class="edit_info_serv">
                        <form class="form" action="class/info.php" method="post" enctype="multipart/form-data">
                            <div class="Input">
                                <label for="Image">Image Profile</label>
                                <input type="file" name="file" value="<?php echo$row['image'];?>" id="Image" placeholder="Image" require>
                            </div>
                                <div class="Input">
                                <label for="rePassword">New Name</label>
                                <input type="text" name="name" value="<?php echo$row['name'];?>" class="style_input" id="rePassword" placeholder="Name">
                            </div>
                            <div class="Input">
                                <label for="Discraption">New Email</label>
                                <input type="email" name="email" value="<?php echo$row['email'];?>" class="style_input" id="Discraption" placeholder="user@gmail.com">
                            </div>
                            <div class="Input">
                                <label for="cost">Update Birthday</label>
                                <input type="date" name="date" value="<?php echo$row['birthday'];?>" class="style_input" id="cost">
                            </div>
                        <div class="Input">
                            <label for="Image">New Password</label>
                            <input type="password" name="password" class="style_input" id="Image" placeholder="*******">
                        </div>
                            <div class="Input">
                            <label for="rePassword">New Re Password</label>
                            <input type="password" name="repassword" class="style_input" id="rePassword" placeholder="*******">
                        </div>
                        <input type="submit" name="edit" class="submit" value="Update">
                        </form>
                    </div>
                            <?php
                        }
                    }
                    }
                    ?>
                </div>
                
            </div>
        </div>
    </section>

    <script src="script.js">

    </script>
</body>
</html>