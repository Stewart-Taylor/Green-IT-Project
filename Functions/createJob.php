<?php
ob_start();

include "dbConnection.php";

$title=$_POST['title']; 
$description =$_POST['description'];
$responsibilities =$_POST['responsibilities'];


session_start();

if(!isset($_SESSION['Company_ID']))
{
	echo" company id not got";
}

$company_id = $_SESSION['Company_ID'];


// To protect from MySQL injection 
$title = stripslashes($title);
$description = stripslashes($description);
$responsibilities = stripslashes($responsibilities);


$title = mysql_real_escape_string($title);
$description = mysql_real_escape_string($description);
$responsibilities = mysql_real_escape_string($responsibilities);






$query =  " insert into job (Job_Title, Description , Responsibilities  ) VALUES ('$title' , '$description' , '$responsibilities')  ";


mysql_query($query) or die(   ); // add error msg later

mysql_close();

header("location:/2011-ac32004/staylor");

ob_end_flush();
?>