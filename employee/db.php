<?php

// Enter your Host, username, password, database below.

// I left password empty because i do not set password on localhost.

$con = mysqli_connect("localhost","companyerp_admin","Ch89lr9*","companyerp_admin");
//$con = mysqli_connect("localhost","companyerp_admin","","companyerp_admin");
// Check connection

if (mysqli_connect_errno())

  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }

  else



  {

  	//echo "success";

  }

?>