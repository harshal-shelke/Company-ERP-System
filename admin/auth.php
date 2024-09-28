<?php

@session_start();

$error=''; //Variable to Store error message;
//print_r($_POST);
if(isset($_POST['submit'])){



if(empty($_POST['username']) || empty($_POST['password'])){

	$error = "Username or Password is Invalid";

}

else

{

	$username = stripslashes($_POST['username']);



	$password = stripslashes($_POST['password']);

	require 'db.php';

	$username = mysqli_real_escape_string($con,$username);

	$password = mysqli_real_escape_string($con,$password);


	//$password=md5($password);	

	//Selecting Database

	

	//sql query to fetch information of registerd user and finds user match.
	$sql = "SELECT * FROM  user WHERE username='$username' AND password='$password'";
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

	    $_SESSION["username"] = $username;

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