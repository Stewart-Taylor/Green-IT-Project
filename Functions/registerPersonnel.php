<?php
ob_start();




// username and password sent from form 

$firstname = $_POST['firstName']; 
$surname = $_POST['surname']; 
$role = $_POST['role']; 
$phone = $_POST['phoneNumber']; 
$email = $_POST['email']; 
$imageLink = $_POST['imageLink']; 


if(isset($_POST['company']))
{

$company = $_POST['company'] ;



$query = " CALL createPersonnel( $company , '$firstname'  , '$surname'  , '$role'  ,  '$phone'  , '$email'  ,  '$imageLink'  ) ";

include "dbConnection.php";

mysql_query($query) or die(  header("location:/2011-ac32004/staylor/createPersonnel.php?error=1" ));



mysql_close();

header("location:/2011-ac32004/staylor/CreatePersonnel.php?complete=1" );


}
else
{

$query = " CALL company_addPersonnel( '$firstname'  , '$surname'  , '$role'  ,  '$phone'  , '$email'  ,  '$imageLink'  ) ";


include "dbConnection.php";

mysql_query($query) or die(  header("location:/2011-ac32004/staylor/companyCreatePersonnel.php?error=1" ));



mysql_close();

header("location:/2011-ac32004/staylor/companyCreatePersonnel.php?complete=1" );




}









//echo $query;





ob_end_flush();
?>