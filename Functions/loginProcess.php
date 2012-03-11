<?php
ob_start();



// include "dbConnection.php";

// username and password sent from form 
$username=$_POST['user']; 
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)




// echo $username ;
// echo "</br>";
// echo $password;

if (strcmp ( $password , "#####" ) == 0)
{
	


	if (strcmp ( $username , "11ac3other23" ) == 0)
	{

	session_start(); 
	$_SESSION["user"] = $username ;
	$_SESSION["staff"] = true;
	


	}


	if (strcmp ( $username , "11ac3extra23" ) == 0)
	{

	session_start(); 
	$_SESSION["user"] = $username ;
	$_SESSION["company"] = true;


	}


	if (strcmp ( $username , "11ac3user23" ) == 0)
	{

	session_start(); 
	$_SESSION["user"] = $username ;
	$_SESSION["applicant"] = true;


	}


	if(isset($_SESSION['user']))
	{
			
		header("location:/2011-ac32004/staylor/");
	}


}

 //if it reaches here then error
header("location:/2011-ac32004/staylor/login.php?loginerror=1");


ob_end_flush();
?>