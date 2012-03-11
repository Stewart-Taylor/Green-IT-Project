<?php
ob_start();



include "dbConnection.php";

// username and password sent from form 
$name=$_POST['name']; 
$description=$_POST['description'];
$website=$_POST['website'];
$logo =$_POST['logo'];
$phone = $_POST['phone'];

$house = $_POST['house']; 
$street = $_POST['street']; 
$city = $_POST['city']; 
$postcode = $_POST['postcode']; 







$query = " CALL createCompany( '$name' , '$phone' , '$description', '$logo'   ,  '$website' ,  '$house' ,'$street'  , '$city'  , '$postcode'  )    ";


// echo $query ;


mysql_query($query) or die(  header("location:/2011-ac32004/staylor/createCompany.php?error=1" ));

mysql_close();

header("location:/2011-ac32004/staylor/createCompany.php?complete=1" );


ob_end_flush();
?>