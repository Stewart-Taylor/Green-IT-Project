<?php 
 // Connects to Our Database 
 
$host="arlia.computing.dundee.ac.uk"; // Host name 
$db_name = "11ac3d23";  // Database Name
 
 
 //Get from Session
 
 
 
 
 
//$username = "11ac3u23"; 	//user	
$password = "#####";			//Password
 
 
 
 
 if(session_id() == '')
 {
     session_start();
}
 

 if(isset($_SESSION['user']))
 {
 
 $username  = $_SESSION['user'];
 }
 else
 {
	header("location:/2011-ac32004/staylor/login.php?loginerror=1" );
 }
 
 

 
 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 ?> 
