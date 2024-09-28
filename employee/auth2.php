<?php

@session_start();

$error=''; //Variable to Store error message;
//print_r($_POST);
if(isset($_POST['submit'])){



if(empty($_POST['em_email']) || empty($_POST['em_password'])){

	$error = "Username or Password is Invalid";

}

else

{

	$em_email = stripslashes($_POST['em_email']);



	$em_password = stripslashes($_POST['em_password']);

	require 'db.php';

	$em_email = mysqli_real_escape_string($con,$em_email);

	$em_password = mysqli_real_escape_string($con,$em_password);


	//$password=md5($password);	

	//Selecting Database

	

	//sql query to fetch information of registerd user and finds user match.
	$sql = "SELECT * FROM  employee WHERE em_email='$em_email' AND em_password='$em_password'";
	//echo $sql;
	$query = mysqli_query($con, $sql);

	$rows = mysqli_num_rows($query);

	$usertype=NULL;
    if($rows == 1)

	{
		while($row = mysqli_fetch_assoc($query))

		{

	       $usertype=$row["usertype"];

	       $id=$row["id"];



	    }

		if($usertype==1)

	    {

	   	//session_start();

	    $_SESSION["loggedin"] = true;

	    $_SESSION["id"] = $id;

	    $_SESSION["em_email"] = $em_email;

	    $_SESSION["usertype"] = $usertype; 

	   
	    $action ="login";

	  
   echo "<script>
alert('Login Successfully');
window.location.href='index.php';
</script>";

	    
			
		



	    } 


		

	}

	else

	{
       echo "<script>
		alert('Email And Password Is Invalid');
		window.location.href='login.php';
		</script>";

	

	}

	mysqli_close($con); // Closing conection

}

}

?>