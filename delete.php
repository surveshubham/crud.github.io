<?php

 $srn = $_GET['srno'];
 
 include 'connetion.php';
 $sql = "DELETE FROM `crud` WHERE `crud`.`srno` = $srn";
 $result = mysqli_query($conn,$sql);

 if($result){
     echo "deleted succssfully";
     header("location: /shubham/php%20crud%20app/?");
 }

?>