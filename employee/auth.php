<?php
    session_start();

include 'db.php';
    $message="";
    if(count($_POST)>0) {
       
        $result = mysqli_query($con,"SELECT * FROM employee WHERE em_email='" . $_POST["em_email"] . "' and em_password = '". $_POST["em_password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["em_email"] = $row['em_email'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index.php");
    }
?>



