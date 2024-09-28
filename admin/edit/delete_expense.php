<?php
   $id= $_GET["id"];
   require '../db.php';
   
    $get_video_id = "delete from pro_expenses where id ='$id' ";
    //echo $get_video_id;
    $result = $con->query($get_video_id);
    header('location:../stock.php');
?>
