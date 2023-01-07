<?php
include("header.php");
include("../assets/php/db_con.php");
?>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    <div class="data joined">
                        <span class="data-title">Login</span>
                        <?php
                        $sql=mysqli_query($con,"SELECT * FROM seission WHERE iduser='$_SESSION[user_id]'");
                        while($row = mysqli_fetch_array($sql)){

                        ?>
                        <span class="data-list online"><?php echo$row['login_data']."  ".$row['login_time'];?></span>
                        <?php
                        }
                        ?>
                    </div>
                    
                    <div class="data joined">
                        <span class="data-title">Logout</span>
                        <?php
                        $sql=mysqli_query($con,"SELECT * FROM seission WHERE iduser='$_SESSION[user_id]'");
                        while($row = mysqli_fetch_array($sql)){
                            if($row['logout_date']===""){
                        ?>
                        <span class="data-list offline">_______</span>
                        <?php
                            }else{?>
                            <span class="data-list offline"><?php echo$row['logout_date']."   ".$row['logout_time'];?></span>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>