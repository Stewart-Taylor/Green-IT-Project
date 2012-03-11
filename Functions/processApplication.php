<?php
ob_start();

			
					
if(!isset($_GET['id']))
{
	//header("location:/2011-ac32004/staylor/jobs.php");
	//echo "no app id";
}
						
if(!isset($_GET['job_id']))
{
	//header("location:/2011-ac32004/staylor/jobs.php");
	//echo "no job id";
}

if(!isset($_GET['status']))
{
	//header("location:/2011-ac32004/staylor/jobs.php");
	//echo "no status id";
}
						
						
$ID  = $_GET['id'] ; 
$job_ID = $_GET['job_id'] ; 
$status = $_GET['status'] ; 
						
include "dbConnection.php";
						

					if(isset($_SESSION['staff']))
					{

$query =  " call processApplication($ID , $job_ID , '$status') ";
}
else
{
	$query =  " call company_processApplication($ID , $job_ID , '$status') ";
}


//echo $query;

mysql_query($query) or die( header("location:/2011-ac32004/staylor/viewApplication.php?job_id=" . $job_ID . "&id=" . $ID  )  ); // add error msg later

mysql_close();



header("location:/2011-ac32004/staylor/viewApplication.php?job_id=" . $job_ID . "&id=" . $ID   );

ob_end_flush();
?>