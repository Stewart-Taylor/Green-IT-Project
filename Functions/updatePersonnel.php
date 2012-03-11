<?php
ob_start();

include "dbConnection.php";

$firstname = $_POST['firstName']; 
$surname = $_POST['surname']; 
$role = $_POST['role']; 
$phone = $_POST['phoneNumber']; 
$email = $_POST['email']; 
$imageLink = $_POST['imageLink']; 
$id = $_POST['id']; 





		if(isset($_SESSION['staff']))
		{
			$query = "call updatePersonnel( $id , '$firstname'  , '$surname' , '$role'  , '$phone'   ,  '$email'  ,   '$imageLink' )" ;
		}
		else 
		{
				$query = "call company_updatePersonnel( $id , '$firstname'  , '$surname' , '$role'  , '$phone'   ,  '$email'  ,   '$imageLink' )" ;
		}




//$query =  " UPDATE company SET Phone_Number = '$phone' , Address ='$address' , Website ='$website' , Company_Description ='$description'  , Company_Logo ='$imageLink'  WHERE User = '$user' " ;

// $query = "call company_updatePersonnel( $id , '$firstname'  , '$surname' , '$role'  , '$phone'   ,  '$email'  ,   '$imageLink' )" ;


//echo $query;

mysql_query($query)  or die(header("location:/2011-ac32004/staylor/editPersonnel.php?error=1&id=" . $id  )  );

mysql_close();

header("location:/2011-ac32004/staylor/editPersonnel.php?complete=1&id=" . $id    );

ob_end_flush();
?>