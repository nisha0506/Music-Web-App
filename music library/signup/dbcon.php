<?php
$server = "localhost";
$user ="root";
$password = "";
$db ="musiclib";
$con=mysqli_connect($server,$user,$password,$db);
  
 if($con)
 {
     ?>
     <script>
    console.log("connection successfull");
     </script>
     <?php
 }
 else
 {
    ?>
     <script>
      console.log("connection not successfull");
     </script>
    <?php
 }

?>