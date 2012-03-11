<?php
ob_start();

include "dbConnection.php";

$id =$_GET['id']; 












//$query =  " UPDATE company SET Phone_Number = '$phone' , Address ='$address' , Website ='$website' , Company_Description ='$description'  , Company_Logo ='$imageLink'  WHERE User = '$user' " ;

$query = "call deleteApplicant($id) ";


echo $query;

mysql_query($query)  or die(header("location:/2011-ac32004/staylor/viewApplicants.php?error=1" ) );

mysql_close();

header("location:/2011-ac32004/staylor/viewApplicants.php?complete=1" );

ob_end_flush();
?>