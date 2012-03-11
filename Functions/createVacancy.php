<?php
ob_start();

include "dbConnection.php";

$jobID=$_POST['job_id']; 
$work_type =$_POST['work_type'];
$salary =$_POST['salary'];
$hours =$_POST['hours'];
$contract_length =$_POST['contract_length'];
$day =$_POST['Date_Day'];
$month =$_POST['Date_Month'];
$year =$_POST['Date_Year'];



session_start();

if(!isset($_SESSION['Company_ID']))
{
	echo" company id not got";
}

$company_id = $_SESSION['Company_ID'];


// To protect from MySQL injection 
$jobID = stripslashes($jobID);
$company_id = stripslashes($company_id);
$work_type = stripslashes($work_type);
$salary = stripslashes($salary);
$hours = stripslashes($hours);
$contract_length = stripslashes($contract_length);
$day = stripslashes($day);
$month = stripslashes($month);
$year = stripslashes($year);

$jobID = mysql_real_escape_string($jobID);
$company_id = mysql_real_escape_string($company_id);
$work_type = mysql_real_escape_string($work_type);
$salary = mysql_real_escape_string($salary);
$hours = mysql_real_escape_string($hours);
$contract_length = mysql_real_escape_string($contract_length);
$day = mysql_real_escape_string($day);
$month = mysql_real_escape_string($month);
$year = mysql_real_escape_string($year);


$closing_date = $year ."-" . $month . "-" .$day;

echo $jobID;


$query =  " insert into job_vacancy (Company_ID, Date_Posted , Closing_Date ,Job_ID ,Work_Type ,Salary , Hours ,Contract_Length) VALUES ($company_id , curDate() , '$closing_date' , $jobID  , '$work_type' ,$salary,$hours,'$contract_length')  ";


echo $query;

mysql_query($query) or die(  "error" ); // add error msg later

mysql_close();

header("location:/2011-ac32004/staylor");

ob_end_flush();
?>