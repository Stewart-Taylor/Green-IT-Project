<?php
ob_start();


include "dbConnection.php";

// username and password sent from form 
$email = $_POST['email']; 
$firstname = $_POST['firstname']; 
$surname = $_POST['surname']; 
$dob_day = $_POST['Date_Day']; 
$dob_month = $_POST['Date_Month']; 
$dob_year = $_POST['Date_Year']; 
$gender = $_POST['gender']; 
$phone = $_POST['phoneNumber']; 
$imageLink = $_POST['imageLink']; 
$cvLink = $_POST['cvLink']; 

$house = $_POST['house']; 
$street = $_POST['street']; 
$city = $_POST['city']; 
$postcode = $_POST['postcode']; 


$dob = $dob_year . "-" . $dob_month . "-" . $dob_day ;



// echo $email . "</br>";
// echo $firstname . "</br>";
// echo $surname . "</br>";
// echo $dob . "</br>";
// echo $gender . "</br>";
// echo $phone . "</br>";
// echo $imageLink . "</br>";
// echo $cvLink . "</br>";
// echo $house . "</br>";
// echo $street . "</br>";
// echo $city . "</br>";
// echo $postcode . "</br>";


//To protect MySQL injection 
// $username = stripslashes($username);
// $password = stripslashes($password);
// $password2 = stripslashes($password2);
// $firstname = stripslashes($firstname);
// $surname = stripslashes($surname);
// $gender = stripslashes($gender);
// $dob_day = stripslashes($dob_day);
// $dob_month = stripslashes($dob_month);
// $dob_year = stripslashes($dob_year);

// $username = mysql_real_escape_string($username);
// $password = mysql_real_escape_string($password);
// $password2 = mysql_real_escape_string($password2);
// $firstname = mysql_real_escape_string($firstname);
// $surname = mysql_real_escape_string($surname);
// $gender = mysql_real_escape_string($gender);
// $dob_day = mysql_real_escape_string($dob_day);
// $dob_month = mysql_real_escape_string($dob_month);
// $dob_year = mysql_real_escape_string($dob_year);


// $password =  trim($password);
// $password2 =  trim($password2);

// $passCheck = strcmp($password , $password2);




$query = " CALL createApplicant( '$email' ,'$firstname', '$surname'   ,  '$dob' ,  '$gender' ,'$phone'  , '$imageLink'  , '$cvLink' , '$house'  ,  '$street' ,   '$city' ,   '$postcode' )    ";


mysql_query($query) or die(  header("location:/2011-ac32004/staylor/create.php?cr=applicant&error=1" ));



mysql_close();

header("location:/2011-ac32004/staylor/create.php?cr=applicant&complete=1" );


ob_end_flush();
?>