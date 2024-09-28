<?php
include "db.php";
extract($_GET);
$id =$_GET["id"];
$leave_status =$_GET["leave_status"];

$select = "update emp_leave set leave_status='$leave_status' where id ='$id'";
  $fire_query= mysqli_query($con,$select);

                    //print_r($query);

                    if($fire_query)

                      {

                      header('location:all_leave.php');

                      }

                      else

                      {

                        echo 'error';

                      }