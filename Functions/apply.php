<?php
ob_start();

session_start();


if(!isset($_GET['job_id']))
{
	header("location:/2011-ac32004/staylor/viewJobs.php")  ;
}

$jobID=$_GET['job_id']; 

//$query =  " insert into application (Applicant, Date_Applied , Job_Vacancy) VALUES ($applicantID ,  curDate() , $jobID)  " ;


$query = "not set";

if(isset($_SESSION['applicant']))
{
	if($_SESSION['applicant'] == true)
	{
		$query =  "call applicant_applyForVacancy($jobID); " ;
	}		
}

if(isset($_SESSION['staff']))
{
	if($_SESSION['staff'] == true)
	{
		if(isset($_GET['applicant']))
		{
		$id = $_GET['applicant'] ;
		
		$query =  "call applyForVacancy($id ,$jobID); " ;
		
		include "dbConnection.php";

// echo $query;

		mysql_query($query) or die( header("location:/2011-ac32004/staylor/CreateApplication.php?error=1")  ); // add error msg later
		mysql_close();

		header("location:/2011-ac32004/staylor/CreateApplication.php?complete=1");
		
		
		
		}
	}		
}
else
{
		





include "dbConnection.php";

//$query =  " insert into application (Applicant, Date_Applied , Job_Vacancy) VALUES ($applicantID ,  curDate() , $jobID)  " ;

mysql_query($query) or die( header("location:/2011-ac32004/staylor/vacancy.php?job_id=" .  $jobID     . "&error=1")  ); // add error msg later
mysql_close();

header("location:/2011-ac32004/staylor/vacancy.php?job_id=" .  $jobID     . "&complete=1");

}

ob_end_flush();
?>