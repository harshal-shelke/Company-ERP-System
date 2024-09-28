<?php
   $id= $_GET["id"];
   require '../db.php';
   
    $get_video_id = "delete from department where id ='$id' ";
    //echo $get_video_id;
    $result = $con->query($get_video_id);
    header('location:../department.php');
?>
