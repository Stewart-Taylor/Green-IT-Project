<?php
ob_start();





if(isset($_POST['id']))
{
$id = $_POST['id'] ;
}

$email = $_POST['email']; 
$firstname = $_POST['firstname']; 
$surname = $_POST['surname']; 
$phone = $_POST['phoneNumber']; 
$imageLink = $_POST['image']; 
$cvLink = $_POST['cv']; 

$house = $_POST['house']; 
$street = $_POST['street']; 
$city = $_POST['city']; 
$postcode = $_POST['postcode']; 





if(isset($_POST['id']))
{
	

	$query =  " CALL updateApplicantProfile( $id , '$email'  , '$firstname',  '$surname'  , '$phone'  , '$imageLink' ,'$cvLink',  '$house' , '$street',  '$city' ,  '$postcode') ";
	
	
//	echo $query;
	
	include "dbConnection.php";
	mysql_query($query)  or die(header("location:/2011-ac32004/staylor/applicantEditProfile.php?error=1&id=" . $id ) );
	mysql_close();
	
	header("location:/2011-ac32004/staylor/applicantEditProfile.php?complete=1&id=" . $id );
}
else
{
$query =  " CALL applicant_updateProfile( '$email'  , '$firstname',  '$surname'  , '$phone'  , '$imageLink' ,'$cvLink',  '$house' , '$street',  '$city' ,  '$postcode') ";
	
	include "dbConnection.php";
	mysql_query($query)  or die(header("location:/2011-ac32004/staylor/applicantEditProfile.php?error=1" ) );
	mysql_close();


header("location:/2011-ac32004/staylor/applicantEditProfile.php?complete=1" );

}









ob_end_flush();
?>