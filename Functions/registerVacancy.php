<?php
ob_start();

include "dbConnection.php";

$title =$_POST['title']; 
$description =$_POST['description'];
$contractLength =$_POST['contractLength'];
$hours =$_POST['hours'];
$salary =$_POST['salary'];
$workType =$_POST['workType'];

$day =$_POST['Date_Day'];
$month =$_POST['Date_Month'];
$year =$_POST['Date_Year'];



$closingDate = $year . "-" . $month . "-" . $day ;




if(isset($_POST['company']))
{

		$company = $_POST['company'] ;
		$query = " call createVacancy( $company , '$title'  , '$description'  ,  '$contractLength'  , $hours  ,  $salary  ,'$workType'  , '$closingDate'   ) ";
		
		
		mysql_query($query)  or die(header("location:/2011-ac32004/staylor/createVacancy.php?error=1" ) );

	mysql_close();

	header("location:/2011-ac32004/staylor/createVacancy.php?complete=1" );
		
}
else
{
		$query = " call company_createVacancy('$title'  , '$description'  ,  '$contractLength'  , $hours  ,  $salary  ,'$workType'  , '$closingDate'   ) ";
		
		
		mysql_query($query)  or die(header("location:/2011-ac32004/staylor/companyCreateVacancy.php?error=1" ) );

		mysql_close();

		header("location:/2011-ac32004/staylor/companyCreateVacancy.php?complete=1" );
}



//$query =  " UPDATE company SET Phone_Number = '$phone' , Address ='$address' , Website ='$website' , Company_Description ='$description'  , Company_Logo ='$imageLink'  WHERE User = '$user' " ;

//$query = " call company_createVacancy('$title'  , '$description'  ,  '$contractLength'  , $hours  ,  $salary  ,'$workType'  , '$closingDate'   ) ";


//echo $query;l



ob_end_flush();
?>