<?php
include("header.php");
include("../assets/php/db_con.php");
?>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>
<?php
$sql=mysqli_query($con,"SELECT * FROM user WHERE type='user'");

?>
                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <?php
                        while($row = mysqli_fetch_array($sql)){
                        ?>
                        <span class="data-list"><?php echo$row['name'];?></span>
                        <?php
                        }?>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <?php
                        $sql=mysqli_query($con,"SELECT * FROM user WHERE type='user'");
                        while($row = mysqli_fetch_array($sql)){
                        ?>
                        <span class="data-list"><?php echo$row['email'];?></span>
                        <?php
                        }?>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <?php
                        $sql=mysqli_query($con,"SELECT * FROM user WHERE type='user'");
                        while($row = mysqli_fetch_array($sql)){
                        ?>
                        <span class="data-list"><?php echo$row['date_join'];?></span>
                        <?php
                        }?>
                    </div>
                    <div class="data type">
                        <span class="data-title">status</span>
                        <?php
                        $sql=mysqli_query($con,"SELECT * FROM user WHERE type='user'");
                        while($row = mysqli_fetch_array($sql)){
                            $sql_login=mysqli_query($con,"SELECT * FROM seission WHERE iduser='$row[id]' ORDER BY id DESC");
                            $row_login = mysqli_fetch_array($sql_login);
                           
                            if(mysqli_num_rows($sql_login) > 0){
                                if($row_login['logout_date']===""){
                                    ?>
                            <span class="data-list online">online</span>
                            <?php
                            }else{
                                ?>
                            <span class="data-list offline">offline</span>
                                
                                <?php
                            
                            }
             
                            }else{
                                ?>
                            <span class="data-list offline">He is not logged into the site yet</span>
                                <?php
                            }
                        }?>
                    </div>
                    <div class="data status">
                        <span class="data-title">Action</span>
                        <?php
                        $sql=mysqli_query($con,"SELECT * FROM user WHERE type='user'");
                        while($row = mysqli_fetch_array($sql)){
                        ?>
                        <span class="data-list">
                            <a href="class/delet_user.php?rn=<?php echo$row['id'];?>"><button class="Action delete">Delete</button></a>
                            <a href="view_user.php?rn=<?php echo$row['id'];?>"><button class="Action view">view</button></a>
                        </span>
                            <?php
                            }?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>