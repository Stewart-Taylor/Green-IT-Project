<?php
ob_start();

include "dbConnection.php";

$id =$_GET['job_id']; 












//$query =  " UPDATE company SET Phone_Number = '$phone' , Address ='$address' , Website ='$website' , Company_Description ='$description'  , Company_Logo ='$imageLink'  WHERE User = '$user' " ;

if(isset($_SESSION['staff']))
{
		$query = "call deleteVacancy($id) ";
}
else
{
		$query = "call company_deleteVacancy($id) ";
}


echo $query;

mysql_query($query)  or die(header("location:/2011-ac32004/staylor/viewJobs.php?error=1" ) );

mysql_close();

header("location:/2011-ac32004/staylor/viewJobs.php?complete=1" );

ob_end_flush();
?>