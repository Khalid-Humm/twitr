<?php
include("assets/php/db_con.php");
$sql=mysqli_query($con,"SELECT * FROM `testimonials` WHERE 1");
while($row=mysqli_fetch_array($sql)){
?>
            
            <div class="item">
              <p>“<?php echo$row['Message'];?>.”</p>
                <h4><?php echo$row['Full_name'];?></h4>
                <img src="assets/images/quote.png" alt="">
            </div>
            <?php
}?>