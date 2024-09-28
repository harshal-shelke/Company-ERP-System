<?php
   $id= $_GET["id"];
   require '../db.php';
   
    $get_video_id = "delete from employee where id ='$id' ";
    //echo $get_video_id;
    $result = $con->query($get_video_id);
    header('location:../all-employees.php');
?>
